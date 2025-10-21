<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureTarget
 */
class FeatureTarget
{
    public function __construct(
        /** The ID of the entity that''s targeted in the include or exclude rule, or all_users to target all users. */
        public ?string $id = null,
        /** The kind of entity that''s targeted. The possible values are: group, administrativeUnit, role, unknownFutureValue. */
        public ?string $targetType = null
    ) {}
}
