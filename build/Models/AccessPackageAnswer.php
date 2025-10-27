<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswer
 */
class AccessPackageAnswer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The localized display value shown to the requestor and approvers. */
    public ?string $displayValue = null;

    /** 
     * 
     * @var AccessPackageQuestion|\stdClass|null
     */
    public AccessPackageQuestion|\stdClass|null $answeredQuestion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayValue'])) {
            $this->displayValue = $data['displayValue'];
        }
        if (isset($data['answeredQuestion'])) {
            $this->answeredQuestion = is_array($data['answeredQuestion']) ? new AccessPackageQuestion($data['answeredQuestion']) : $data['answeredQuestion'];
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
