<?php

/*
 * This file is part of the tmilos/scim-schema package.
 *
 * (c) Milos Tomic <tmilos@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Tmilos\ScimSchema\Model\Schema;

abstract class ReferenceTypeValue
{
    const SCIM = 'scim';
    const USER = 'User';
    const GROUP = 'Group';
    const EXTERNAL = 'external';
    const URI = 'uri';
}