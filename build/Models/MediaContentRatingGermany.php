<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MediaContentRatingGermany
 */
class MediaContentRatingGermany
{
    /**
     */
    private ?string $movieRating;

    /**
     */
    private ?string $tvRating;


    public function getMovieRating(): ?string
    {
        return $this->movieRating;
    }

    public function setMovieRating(?string $movieRating): self
    {
        $this->movieRating = $movieRating;
        return $this;
    }

    public function getTvRating(): ?string
    {
        return $this->tvRating;
    }

    public function setTvRating(?string $tvRating): self
    {
        $this->tvRating = $tvRating;
        return $this;
    }

}
