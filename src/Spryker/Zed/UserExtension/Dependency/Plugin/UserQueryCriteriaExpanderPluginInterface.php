<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\UserExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueryCriteriaTransfer;
use Generated\Shared\Transfer\UserCriteriaTransfer;

/**
 * Implement this plugin if you want to expand the user's table query criteria.
 */
interface UserQueryCriteriaExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the user's table query criteria using `UserCriteriaTransfer`.
     * - The keys of `QueryCriteria.conditions` are written to SQL as is, so they MUST NOT contain caller input.
     * - Passes every value as a `?` placeholder in the key and binds it with the array value.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QueryCriteriaTransfer $queryCriteriaTransfer
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\QueryCriteriaTransfer
     */
    public function expand(QueryCriteriaTransfer $queryCriteriaTransfer, UserCriteriaTransfer $userCriteriaTransfer): QueryCriteriaTransfer;
}
