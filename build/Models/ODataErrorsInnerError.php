<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsInnerError
 */
class ODataErrorsInnerError
{
    public function __construct(
        /** Date when the error occured. */
        public ?\DateTimeInterface $date = null
    ) {}
}
