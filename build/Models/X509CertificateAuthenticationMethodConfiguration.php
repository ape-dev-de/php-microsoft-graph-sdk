<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateAuthenticationMethodConfiguration
 */
class X509CertificateAuthenticationMethodConfiguration
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Groups of users that are excluded from a policy.
     * @var ExcludeTarget[]
     */
    public array $excludeTargets = [];

    /** 
     * The state of the policy. Possible values are: enabled, disabled.
     * @var AuthenticationMethodState|\stdClass|null
     */
    public mixed $state = null;

    /** 
     * Defines strong authentication configurations. This configuration includes the default authentication mode and the different rules for strong authentication bindings.
     * @var X509CertificateAuthenticationModeConfiguration|\stdClass|null
     */
    public mixed $authenticationModeConfiguration = null;

    /** 
     * Defines fields in the X.509 certificate that map to attributes of the Microsoft Entra user object in order to bind the certificate to the user. The priority of the object determines the order in which the binding is carried out. The first binding that matches will be used and the rest ignored.
     * @var X509CertificateUserBinding[]
     */
    public array $certificateUserBindings = [];

    /**  */
    public ?X509CertificateCRLValidationConfiguration $crlValidationConfiguration = null;

    /** 
     * A collection of groups that are enabled to use the authentication method.
     * @var AuthenticationMethodTarget[]
     */
    public array $includeTargets = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['excludeTargets'])) {
            $this->excludeTargets = $data['excludeTargets'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['authenticationModeConfiguration'])) {
            $this->authenticationModeConfiguration = $data['authenticationModeConfiguration'];
        }
        if (isset($data['certificateUserBindings'])) {
            $this->certificateUserBindings = $data['certificateUserBindings'];
        }
        if (isset($data['crlValidationConfiguration'])) {
            $this->crlValidationConfiguration = $data['crlValidationConfiguration'];
        }
        if (isset($data['includeTargets'])) {
            $this->includeTargets = $data['includeTargets'];
        }
    }
}
