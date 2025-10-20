<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsTxtRecord
 */
class DomainDnsTxtRecord
{
    /**
     * Value used when configuring the text property at the DNS host.
     */
    private ?string $text;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
