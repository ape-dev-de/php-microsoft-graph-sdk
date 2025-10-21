<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * NotebookLinks
 */
class NotebookLinks
{
    public function __construct(
        /** Opens the notebook in the OneNote native client if it's installed. */
        public ?ExternalLink $oneNoteClientUrl = null,
        /** Opens the notebook in OneNote on the web. */
        public ?ExternalLink $oneNoteWebUrl = null
    ) {}
}
