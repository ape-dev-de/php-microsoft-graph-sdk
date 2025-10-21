<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServicePort
 */
class SecurityKubernetesServicePort
{
    public function __construct(
        /** The application protocol for this port. */
        public ?string $appProtocol = null,
        /** The name of this port within the service. */
        public ?string $name = null,
        /** The port on each node on which this service is exposed when the type is either NodePort or LoadBalancer. */
        public ?float $nodePort = null,
        /** The port that this service exposes. */
        public ?float $port = null,
        /** The protocol name. Possible values are: udp, tcp, sctp, unknownFutureValue. */
        public ?SecurityContainerPortProtocol $protocol = null,
        /** The name or number of the port to access on the pods targeted by the service. The port number must be in the range 1 to 65535. The name must be an IANASVCNAME. */
        public ?string $targetPort = null
    ) {}
}
