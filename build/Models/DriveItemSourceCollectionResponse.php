<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DriveItemSourceCollectionResponse - Collection response
 */
class DriveItemSourceCollectionResponse
{
    /**
     * @var array<int, DriveItemSource>
     */
    public array $value = [];
    
    public ?string $odataContext = null;
    public ?string $odataNextLink = null;
    public ?int $odataCount = null;
    
    /**
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['value']) && is_array($data['value'])) {
            $this->value = $data['value'];
        }
        if (isset($data['@odata.context'])) {
            $this->odataContext = $data['@odata.context'];
        }
        if (isset($data['@odata.nextLink'])) {
            $this->odataNextLink = $data['@odata.nextLink'];
        }
        if (isset($data['@odata.count'])) {
            $this->odataCount = $data['@odata.count'];
        }
    }
}
