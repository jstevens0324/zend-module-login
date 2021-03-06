<?php

/**
 * Auth_Model_Form_Login
 *
 * @package zend-module-login
 * @version 1.0
 * zend-module-login
 * Copyright (C) 2010-2013  Diogo Oliveira de Melo
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class Auth_Model_Form_Login extends DZend_Form
{
    public function init()
    {
        $this->addEmail();
        $this->addPassword();
        $this->addSubmit($this->_t('Login'));

        $e = new Zend_Form_Element_Hidden('authority');
        $e->setValue('db');
        $this->addElement($e);

        $e = new Zend_Form_Element_Hidden('name');
        $this->addElement($e);

        $this->setMethod('post');
        $this->setName('login');
        $this->setAction('/Auth/index/login');
    }
}
