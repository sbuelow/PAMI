<?php
/**
 * Returns a list of bridges in the system.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Stefano Buelow <stefano.buelow@gmail.com>
 * @license    https://github.com/sbuelow/PAMI/ Apache License 2.0
 * @version    SVN: $Id$
 * @link       https://github.com/sbuelow/PAMI/
 *
 * Copyright 2025 Stefano Buelow <stefano.buelow@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace PAMI\Message\Action;

/**
 * Returns a list of bridges in the system.
 *
 * PHP Version 5
 *
 * @category   Pami
 * @package    Message
 * @subpackage Action
 * @author     Stefano Buelow <stefano.buelow@gmail.com>
 * @license    https://github.com/sbuelow/PAMI/ Apache License 2.0
 * @link       https://github.com/sbuelow/PAMI/
 */

class BridgeListAction extends ActionMessage
{
    /**
     * Constructor.
     *
     * @param string $bridgeType Optional type for filtering the resulting list of bridges.
     *
     * @return void
     */
    public function __construct($bridgeType)
    {
        parent::__construct('BridgeList');

        $this->setKey('BridgeType', $bridgeType);
    }
}
