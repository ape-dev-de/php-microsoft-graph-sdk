<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServicePort
 */
class SecurityKubernetesServicePort
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The application protocol for this port. */
    public ?string $appProtocol = null;

    /** The name of this port within the service. */
    public ?string $name = null;

    /** The port on each node on which this service is exposed when the type is either NodePort or LoadBalancer. */
    public ?float $nodePort = null;

    /** The port that this service exposes. */
    public ?float $port = null;

    /** 
     * The protocol name. Possible values are: udp, tcp, sctp, unknownFutureValue.
     * @var SecurityContainerPortProtocol|\stdClass|null
     */
    public mixed $protocol = null;

    /** The name or number of the port to access on the pods targeted by the service. The port number must be in the range 1 to 65535. The name must be an IANASVCNAME. */
    public ?string $targetPort = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['appProtocol'])) {
            $this->appProtocol = $data['appProtocol'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['nodePort'])) {
            $this->nodePort = $data['nodePort'];
        }
        if (isset($data['port'])) {
            $this->port = $data['port'];
        }
        if (isset($data['protocol'])) {
            $this->protocol = is_array($data['protocol']) ? new SecurityContainerPortProtocol($data['protocol']) : $data['protocol'];
        }
        if (isset($data['targetPort'])) {
            $this->targetPort = $data['targetPort'];
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
