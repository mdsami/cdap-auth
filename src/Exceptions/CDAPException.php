<?php

/*
 * This file is part of cdap-auth.
 *
 * (c) Md Sami <mdsami.work@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mdsami\CdapAuth\Exceptions;

use Exception;

class CDAPException extends Exception
{
    /**
     * {@inheritdoc}
     */
    public function missingClientId(){
        echo 'Missing Client ID.';
        exit;
    }

    public function missingClientSecret(){
        echo 'Missing Client ID.';
        exit;
    }

    public function missingRedirectUri(){
        echo 'Missing Redirect Uri.';
        exit;
    }
}