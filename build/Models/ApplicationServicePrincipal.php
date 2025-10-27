<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationServicePrincipal
 */
class ApplicationServicePrincipal
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var Application|\stdClass|null
     */
    public Application|\stdClass|null $application = null;

    /** 
     * 
     * @var ServicePrincipal|\stdClass|null
     */
    public ServicePrincipal|\stdClass|null $servicePrincipal = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Application($data['application']) : $data['application'];
        }
        if (isset($data['servicePrincipal'])) {
            $this->servicePrincipal = is_array($data['servicePrincipal']) ? new ServicePrincipal($data['servicePrincipal']) : $data['servicePrincipal'];
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
