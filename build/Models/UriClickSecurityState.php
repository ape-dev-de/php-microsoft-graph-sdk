<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UriClickSecurityState
 */
class UriClickSecurityState
{
    public function __construct(
        /**  */
        public ?string $clickAction = null,
        /**  */
        public ?\DateTimeInterface $clickDateTime = null,
        /**  */
        public ?string $id = null,
        /**  */
        public ?string $sourceId = null,
        /**  */
        public ?string $uriDomain = null,
        /**  */
        public ?string $verdict = null
    ) {}
}
