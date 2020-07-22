<?php
/*********************************************************************************/
/**   Copyright 2017 - Present Okta, Inc.                                       **/
/**                                                                             **/
/**   Licensed under the Apache License, Version 2.0 (the "License");           **/
/**   you may not use this file except in compliance with the License.          **/
/**   You may obtain a copy of the License at                                   **/
/**                                                                             **/
/**        http://www.apache.org/licenses/LICENSE-2.0                           **/
/**                                                                             **/
/**   Unless required by applicable law or agreed to in writing, software       **/
/**   distributed under the License is distributed on an "AS IS" BASIS,         **/
/**   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  **/
/**   See the License for the specific language governing permissions and       **/
/**   limitations under the License.                                            **/
/*********************************************************************************/

/************************************************/
/** This file is auto-generated.  Do Not Edit! **/
/************************************************/

namespace Okta\UserFactor;

class UserFactor extends \Okta\Resource\AbstractResource
{
    const ID = 'id';
    const LINKS = '_links';
    const STATUS = 'status';
    const VERIFY = 'verify';
    const CREATED = 'created';
    const PROVIDER = 'provider';
    const EMBEDDED = '_embedded';
    const FACTOR_TYPE = 'factorType';
    const LAST_UPDATED = 'lastUpdated';

    protected $requiresResolution = true;
    protected $resolutionPropertyName = "factorType";
    protected $resolutionMapping = [
        "call" => \Okta\UserFactor\CallUserFactor::class,
        "email" => \Okta\UserFactor\EmailUserFactor::class,
        "push" => \Okta\UserFactor\PushUserFactor::class,
        "question" => \Okta\UserFactor\SecurityQuestionUserFactor::class,
        "sms" => \Okta\UserFactor\SmsUserFactor::class,
        "token" => \Okta\UserFactor\TokenUserFactor::class,
        "token:hardware" => \Okta\UserFactor\HardwareUserFactor::class,
        "token:software:totp" => \Okta\UserFactor\TotpUserFactor::class,
        "u2f" => \Okta\UserFactor\U2fUserFactor::class,
        "web" => \Okta\UserFactor\WebUserFactor::class,
        "webauthn" => \Okta\UserFactor\WebAuthnUserFactor::class,
    ];



}