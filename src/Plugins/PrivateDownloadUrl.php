<?php

namespace Overtrue\Flysystem\Qiniu\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;

/**
 * Class PrivateDownloadUrl
 *
 * @package \Overtrue\Flysystem\Qiniu\Plugins
 */
class PrivateDownloadUrl extends AbstractPlugin
{
    public function getMethod()
    {
        return 'privateDownloadUrl';
    }

    public function handle($path, $expires = 3600)
    {
        $adapter = $this->filesystem->getAdapter();
        return $adapter->privateDownloadUrl($path, $expires);
    }
}
