# fx_templates_jungerkammerchor - TYPO3 template basic extension for customer installations

## Description
This project contains the basic configuration and customer specific layout

## How to use
go to terminal, navigate to public/typo3conf/ext and execute
````bash
git clone https://git.fxnnect.de/fxnet/fx_templates_jungerkammerchor.git
````
go to git.fxnnect.de and create a new project with fx_templates_[customername]
````bash
git remote add -t \* -f origin [URL to new repository]
````
````bash
git pull origin master
````
````bash
Replace all paths from fx_templates_jungerkammerchor to fx_templates_[customername]
 - tx_fxtemplatesjungerkammerchor
 - fx_templates_jungerkammerchor
 - FxTemplatesJungerkammerchor
````
````bash
git push origin master
````

### Supported TYPO3 version
* 9.5.x
* 8.7.x

### Dependencies
* gridelements 9
* gridelements 8.4

### Frontend dependencies
* bootstrap 4
* jquery 3