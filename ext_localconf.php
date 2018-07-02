<?php

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

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        /** @var \TYPO3\CMS\Extbase\SignalSlot\Dispatcher $signalSlotDispatcher */
        $signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\Dispatcher');

        if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('razor')) {
            $signalSlotDispatcher->connect(
                \RZ\Razor\Service\AssetService::class,
                \RZ\Razor\Service\AssetService::ASSET_SIGNAL,
                \RZ\Vhsminify\Slot\MinifySlot::class,
                'minifyAssets',
                false
            );
        } else if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('vhs')) {
            $signalSlotDispatcher->connect(
                \FluidTYPO3\Vhs\Service\AssetService::class,
                \FluidTYPO3\Vhs\Service\AssetService::ASSET_SIGNAL,
                \RZ\Vhsminify\Slot\MinifySlot::class,
                'minifyAssets',
                false
            );
        }
    },
    $_EXTKEY
);
