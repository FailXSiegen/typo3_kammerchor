<?php
namespace Deployer;

require 'recipe/typo3.php';
require 'recipe/rsync.php';

// Hosts
host('prod')
    ->hostname('oc-vm39.riconnect.de')
    ->user('c1_ssh_kammer')
    ->set('deploy_path', '/var/www/clients/client1/web749/web/deployment');

// Config
set('bin_folder', './vendor/bin/');
set('typo3_webroot', 'public');
set('yarn_path', 'public/typo3conf/ext/fx_templates_jungerkammerchor/');

add('shared_files', [
    '.env'
]);

set('rsync_src', './');

set('rsync',[
    'exclude'      => [
        'deploy.php',
        '.docker*',
        '.editorconfig',
        '.env',
        '.git*',
        '.surf',
        '.deployer',
        'docker-compose.yml',
        'public/fileadmin',
        'public/uploads',
        'README.md',
        'deploy_rsa',
        'deploy_rsa.enc',
        '.travis.yml'
    ],
    'exclude-file' => false,
    'include'      => [],
    'include-file' => false,
    'filter'       => [],
    'filter-file'  => false,
    'filter-perdir'=> false,
    'flags'        => 'rz', // Recursive, with compress
    'options'      => ['delete', 'times', 'perms', 'links', 'delete-excluded'],
    'timeout'      => 600,
]);

// Tasks
task('build', function () {
    run('composer -q install');
})->local();

task('typo3', function () {
    run('cd {{release_path}} && {{bin_folder}}typo3cms install:fixfolderstructure');
    run('cd {{release_path}} && {{bin_folder}}typo3cms install:generatepackagestates');
    run('cd {{release_path}} && {{bin_folder}}typo3cms database:updateschema *.add,*.change');
    run('cd {{release_path}} && {{bin_folder}}typo3cms extension:setupactive');
    run('cd {{release_path}} && {{bin_folder}}typo3cms language:update');
    run('cd {{release_path}} && {{bin_folder}}typo3cms cache:flush');
});

task('yarn', function () {
    run('cd {{yarn_path}} && yarn install --silent --non-interactive');
})->local();

// task('opcache', function () {
//     run('cd {{release_path}} && {{bin_folder}}cachetool opcache:reset');
// });

task('deploy', [
    'deploy:unlock',
    'deploy:prepare',
    'deploy:lock',
    'build',
    'yarn',
    'deploy:release',
    'rsync',
    'deploy:shared',
    'typo3',
    'deploy:symlink',
    // 'opcache',
    'deploy:unlock',
    'cleanup',
    'success'
])->desc('Deploy TYPO3');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');
