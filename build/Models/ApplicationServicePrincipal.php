<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationServicePrincipal
 */
class ApplicationServicePrincipal
{
    /** 
     * 
     * @var Application|\stdClass|null
     */
    public mixed $application = null;

    /** 
     * 
     * @var ServicePrincipal|\stdClass|null
     */
    public mixed $servicePrincipal = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['application'])) {
            $this->application = is_array($data['application']) ? new Application($data['application']) : $data['application'];
        }
        if (isset($data['servicePrincipal'])) {
            $this->servicePrincipal = is_array($data['servicePrincipal']) ? new ServicePrincipal($data['servicePrincipal']) : $data['servicePrincipal'];
        }
    }
}
