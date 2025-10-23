<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OmaSettingFloatingPoint
 */
class OmaSettingFloatingPoint
{
    /** Description. */
    public ?string $description = null;

    /** Display Name. */
    public ?string $displayName = null;

    /** OMA. */
    public ?string $omaUri = null;

    /** Value. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['omaUri'])) {
            $this->omaUri = $data['omaUri'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
