<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminConsentRequestPolicy
 */
class AdminConsentRequestPolicy
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Specifies whether the admin consent request feature is enabled or disabled. Required. */
    public ?bool $isEnabled = null;

    /** Specifies whether reviewers will receive notifications. Required. */
    public ?bool $notifyReviewers = null;

    /** Specifies whether reviewers will receive reminder emails. Required. */
    public ?bool $remindersEnabled = null;

    /** Specifies the duration the request is active before it automatically expires if no decision is applied. */
    public ?float $requestDurationInDays = null;

    /** 
     * The list of reviewers for the admin consent. Required.
     * @var AccessReviewReviewerScope[]
     */
    public array $reviewers = [];

    /** Specifies the version of this policy. When the policy is updated, this version is updated. Read-only. */
    public ?float $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['notifyReviewers'])) {
            $this->notifyReviewers = $data['notifyReviewers'];
        }
        if (isset($data['remindersEnabled'])) {
            $this->remindersEnabled = $data['remindersEnabled'];
        }
        if (isset($data['requestDurationInDays'])) {
            $this->requestDurationInDays = $data['requestDurationInDays'];
        }
        if (isset($data['reviewers'])) {
            $this->reviewers = $data['reviewers'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
