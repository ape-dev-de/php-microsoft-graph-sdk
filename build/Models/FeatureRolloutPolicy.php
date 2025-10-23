<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FeatureRolloutPolicy
 */
class FeatureRolloutPolicy
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** A description for this feature rollout policy. */
    public ?string $description = null;

    /** The display name for this  feature rollout policy. */
    public ?string $displayName = null;

    /**  */
    public ?StagedFeatureName $feature = null;

    /** Indicates whether this feature rollout policy should be applied to the entire organization. */
    public ?bool $isAppliedToOrganization = null;

    /** Indicates whether the feature rollout is enabled. */
    public ?bool $isEnabled = null;

    /** 
     * Nullable. Specifies a list of directoryObject resources that feature is enabled for.
     * @var DirectoryObject[]
     */
    public array $appliesTo = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['feature'])) {
            $this->feature = is_array($data['feature']) ? new StagedFeatureName($data['feature']) : $data['feature'];
        }
        if (isset($data['isAppliedToOrganization'])) {
            $this->isAppliedToOrganization = $data['isAppliedToOrganization'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['appliesTo'])) {
            $this->appliesTo = $data['appliesTo'];
        }
    }
}
