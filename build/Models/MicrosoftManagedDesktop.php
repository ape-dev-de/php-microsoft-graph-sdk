<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftManagedDesktop
 */
class MicrosoftManagedDesktop
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged.
     * @var MicrosoftManagedDesktopType|\stdClass|null
     */
    public MicrosoftManagedDesktopType|\stdClass|null $managedType = null;

    /** The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with. */
    public ?string $profile = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['managedType'])) {
            $this->managedType = is_array($data['managedType']) ? new MicrosoftManagedDesktopType($data['managedType']) : $data['managedType'];
        }
        if (isset($data['profile'])) {
            $this->profile = $data['profile'];
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
