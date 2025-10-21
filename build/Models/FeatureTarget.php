<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureTarget
 */
class FeatureTarget
{
    /**
     * The ID of the entity that''s targeted in the include or exclude rule, or all_users to target all users.
     */
    private ?string $id;

    /**
     * The kind of entity that''s targeted. The possible values are: group, administrativeUnit, role, unknownFutureValue.
     */
    private ?string $targetType;


    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    public function setTargetType(?string $targetType): self
    {
        $this->targetType = $targetType;
        return $this;
    }

}
