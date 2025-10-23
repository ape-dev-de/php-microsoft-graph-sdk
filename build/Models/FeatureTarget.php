<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureTarget
 */
class FeatureTarget
{
    /** The ID of the entity that's targeted in the include or exclude rule, or all_users to target all users. */
    public ?string $id = null;

    /** 
     * The kind of entity that's targeted. The possible values are: group, administrativeUnit, role, unknownFutureValue.
     * @var FeatureTargetType|\stdClass|null
     */
    public mixed $targetType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = $data['targetType'];
        }
    }
}
