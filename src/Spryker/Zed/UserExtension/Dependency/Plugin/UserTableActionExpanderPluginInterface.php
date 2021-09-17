<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\UserExtension\Dependency\Plugin;

interface UserTableActionExpanderPluginInterface
{
    /**
     * Specification:
     * - Prepares ButtonTransfer[] for using in actions list
     *
     * @api
     *
     * @param array $user
     *
     * @return array<\Generated\Shared\Transfer\ButtonTransfer>
     */
    public function getActionButtonDefinitions(array $user);
}
