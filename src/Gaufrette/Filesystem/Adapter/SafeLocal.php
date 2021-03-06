<?php

namespace Gaufrette\Filesystem\Adapter;

use Gaufrette\Filesystem\Adapter;
use Gaufrette\Checksum;

/**
 * Safe local adapter that encodes key to avoid the use of the directories
 * structure
 *
 * @package Gaufrette
 * @author  Antoine Hérault <antoine.herault@gmail.com>
 */
class SafeLocal extends Local
{
    /**
     * {@inheritDoc}
     */
    public function computePath($key)
    {
        return parent::computePath(base64_encode($key));
    }

    /**
     * {@inheritDoc}
     */
    public function computeKey($path)
    {
        return base64_decode(parent::computeKey($path));
    }
}
