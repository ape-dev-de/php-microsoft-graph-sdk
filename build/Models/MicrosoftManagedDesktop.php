<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftManagedDesktop
 */
class MicrosoftManagedDesktop
{
    /** 
     * Indicates the provisioning policy associated with Microsoft Managed Desktop settings. Possible values are: notManaged, premiumManaged, standardManaged, starterManaged, unknownFutureValue. The default is notManaged.
     * @var MicrosoftManagedDesktopType|\stdClass|null
     */
    public mixed $managedType = null;

    /** The name of the Microsoft Managed Desktop profile that the Windows 365 Cloud PC is associated with. */
    public ?string $profile = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['managedType'])) {
            $this->managedType = $data['managedType'];
        }
        if (isset($data['profile'])) {
            $this->profile = $data['profile'];
        }
    }
}
