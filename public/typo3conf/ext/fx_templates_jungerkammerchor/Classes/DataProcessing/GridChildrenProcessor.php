<?php

namespace Failx\FxTemplatesJungerkammerchor\DataProcessing;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Fetch records from the database, using the default .select syntax from TypoScript.
 */
class GridChildrenProcessor extends \GridElementsTeam\Gridelements\DataProcessing\GridChildrenProcessor
{
    /**
     * @param $data
     */
    protected function checkOptions(&$data)
    {
        if (
            (
                $this->options['resolveBackendLayout'] ||
                $this->options['respectColumns'] ||
                $this->options['respectRows']
            ) && !$this->layoutSetup->getRealPid()
        ) {
            $this->layoutSetup->init((int)$data['pid'], $this->contentObjectConfiguration);
        }

        if ($this->options['resolveFlexFormData'] && !empty($data['pi_flexform'])) {
            $this->gridelements->initPluginFlexForm('pi_flexform', $data);
            $this->gridelements->getPluginFlexFormData($data);
        }
        if ($this->options['resolveBackendLayout']) {
            if (!empty($this->layoutSetup->getLayoutSetup($data['tx_gridelements_backend_layout']))) {
                $data['tx_gridelements_backend_layout_resolved'] = $this->layoutSetup->getLayoutSetup($data['tx_gridelements_backend_layout']);
            } elseif (!empty($this->layoutSetup->getLayoutSetup('default'))) {
                $data['tx_gridelements_backend_layout_resolved'] = $this->layoutSetup->getLayoutSetup('default');
            }
        }
    }
}