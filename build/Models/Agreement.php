<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Agreement
 */
class Agreement
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of the agreement. The display name is used for internal tracking of the agreement but isn't shown to end users who view the agreement. Supports $filter (eq). */
    public ?string $displayName = null;

    /** Indicates whether end users are required to accept this agreement on every device that they access it from. The end user is required to register their device in Microsoft Entra ID, if they haven't already done so. Supports $filter (eq). */
    public ?bool $isPerDeviceAcceptanceRequired = null;

    /** Indicates whether the user has to expand the agreement before accepting. Supports $filter (eq). */
    public ?bool $isViewingBeforeAcceptanceRequired = null;

    /** 
     * Expiration schedule and frequency of agreement for all users. Supports $filter (eq).
     * @var TermsExpiration|\stdClass|null
     */
    public TermsExpiration|\stdClass|null $termsExpiration = null;

    /** The duration after which the user must reaccept the terms of use. The value is represented in ISO 8601 format for durations. Supports $filter (eq). */
    public ?string $userReacceptRequiredFrequency = null;

    /** 
     * Read-only. Information about acceptances of this agreement.
     * @var AgreementAcceptance[]
     */
    public array $acceptances = [];

    /** 
     * Default PDF linked to this agreement.
     * @var AgreementFile|\stdClass|null
     */
    public AgreementFile|\stdClass|null $file = null;

    /** 
     * PDFs linked to this agreement. This property is in the process of being deprecated. Use the  file property instead. Supports $expand.
     * @var AgreementFileLocalization[]
     */
    public array $files = [];


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isPerDeviceAcceptanceRequired'])) {
            $this->isPerDeviceAcceptanceRequired = $data['isPerDeviceAcceptanceRequired'];
        }
        if (isset($data['isViewingBeforeAcceptanceRequired'])) {
            $this->isViewingBeforeAcceptanceRequired = $data['isViewingBeforeAcceptanceRequired'];
        }
        if (isset($data['termsExpiration'])) {
            $this->termsExpiration = is_array($data['termsExpiration']) ? new TermsExpiration($data['termsExpiration']) : $data['termsExpiration'];
        }
        if (isset($data['userReacceptRequiredFrequency'])) {
            $this->userReacceptRequiredFrequency = $data['userReacceptRequiredFrequency'];
        }
        if (isset($data['acceptances'])) {
            $this->acceptances = $data['acceptances'];
        }
        if (isset($data['file'])) {
            $this->file = is_array($data['file']) ? new AgreementFile($data['file']) : $data['file'];
        }
        if (isset($data['files'])) {
            $this->files = $data['files'];
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
