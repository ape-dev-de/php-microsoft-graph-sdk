<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsInnerError
 */
class ODataErrorsInnerError
{
    /**
     * Date when the error occured.
     */
    private ?\DateTimeInterface $date;


    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

}
