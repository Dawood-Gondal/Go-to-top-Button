<?php
declare(strict_types=1);

/**
 * @category    BugsBunny Enterprise
 * @package     BugsBunny_OrderComment
 * @copyright   Copyright (c) 2023 BugsBunny Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace BugsBunny\GoToTopButton\Model\Config\Backend;

use Magento\Framework\App\ObjectManager;

class Image extends \Magento\Config\Model\Config\Backend\Image
{
    /**
     * @param $uploadDir
     * @return string
     */
    protected function getUploadDirPath($uploadDir): string
    {
        $directoryList = ObjectManager::getInstance()->get('\Magento\Framework\Filesystem\DirectoryList');
        return rtrim($directoryList->getRoot(), '/') . '/' . ltrim($uploadDir, '/');
    }
}
