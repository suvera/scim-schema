<?php

/*
 * This file is part of the tmilos/scim-schema package.
 *
 * (c) Milos Tomic <tmilos@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tmilos\ScimSchema\Model\SPC;

class Filter extends AbstractSPCItem
{
    /** @var int */
    protected $maxResults;

    /**
     * @param bool $supported
     * @param int  $maxResults
     */
    public function __construct(&$supported, &$maxResults)
    {
        parent::__construct($supported);

        $this->maxResults = &$maxResults;
    }

    /**
     * @return int
     */
    public function getMaxResults()
    {
        return $this->maxResults;
    }

    public function toArray()
    {
        $result = parent::toArray();

        if ($this->isSupported()) {
            $result['maxResults'] = $this->maxResults;
        }

        return $result;
    }
}
