<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10SecureAssessmentConfiguration
 */
class Windows10SecureAssessmentConfiguration
{
    public function __construct(
        /** Indicates whether or not to allow the app from printing during the test. */
        public ?bool $allowPrinting = null,
        /** Indicates whether or not to allow screen capture capability during a test. */
        public ?bool $allowScreenCapture = null,
        /** Indicates whether or not to allow text suggestions during the test. */
        public ?bool $allowTextSuggestion = null,
        /** The account used to configure the Windows device for taking the test. The user can be a domain account (domain/user), an AAD account (username@tenant.com) or a local account (username). */
        public ?string $configurationAccount = null,
        /** This topic provides descriptions of the declared methods, properties and relationships exposed by the secureAssessment resource. */
        public ?string $launchUri = null
    ) {}
}
