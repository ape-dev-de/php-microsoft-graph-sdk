<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Windows10EditionType - Enum
 * Windows 10 Edition type.
 */
enum Windows10EditionType: string
{
    case WINDOWS10ENTERPRISE = 'windows10Enterprise';
    case WINDOWS10ENTERPRISEN = 'windows10EnterpriseN';
    case WINDOWS10EDUCATION = 'windows10Education';
    case WINDOWS10EDUCATIONN = 'windows10EducationN';
    case WINDOWS10MOBILEENTERPRISE = 'windows10MobileEnterprise';
    case WINDOWS10HOLOGRAPHICENTERPRISE = 'windows10HolographicEnterprise';
    case WINDOWS10PROFESSIONAL = 'windows10Professional';
    case WINDOWS10PROFESSIONALN = 'windows10ProfessionalN';
    case WINDOWS10PROFESSIONALEDUCATION = 'windows10ProfessionalEducation';
    case WINDOWS10PROFESSIONALEDUCATIONN = 'windows10ProfessionalEducationN';
    case WINDOWS10PROFESSIONALWORKSTATION = 'windows10ProfessionalWorkstation';
    case WINDOWS10PROFESSIONALWORKSTATIONN = 'windows10ProfessionalWorkstationN';
}
