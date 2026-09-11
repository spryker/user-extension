<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\UserExtension\Dependency\Plugin;

use Generated\Shared\Transfer\UserCriteriaTransfer;

interface UserIdentityCriteriaExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands the criteria used to look up the user behind an access token.
     * - Receives the identity claims decoded from the token as an associative array.
     * - Maps claims onto `UserCriteria.userConditions`, for example a uuid claim onto `uuids` or a
     *   third-party subject onto `usernames`.
     * - Runs before the default mapping of the `id_user` claim, which is applied only when no plugin
     *   produced an identifying condition.
     * - Must not decide the user's status: the lookup is restricted to active users afterwards.
     *
     * @api
     *
     * @param array<string, mixed> $identityClaims
     * @param \Generated\Shared\Transfer\UserCriteriaTransfer $userCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\UserCriteriaTransfer
     */
    public function expand(array $identityClaims, UserCriteriaTransfer $userCriteriaTransfer): UserCriteriaTransfer;
}
