<?php

namespace App\Controllers;

class Setup extends BaseController
{
    function analyticsDashboard()
    {
        return view($this->config->views['analytics-dashboard'], $this->data);
    }

    function crmDashboard()
    {
        return view($this->config->views['crm-dashboard'], $this->data);
    }
    
    function ecommerceDashboard()
    {
        return view($this->config->views['ecommerce-dashboard'], $this->data);
    }
    
    function appEmail()
    {
        return view($this->config->views['app-email'], $this->data);
    }
    
    function appChat()
    {
        return view($this->config->views['app-chat'], $this->data);
    }
    
    function appCalendar()
    {
        return view($this->config->views['app-calendar'], $this->data);
    }
    
    function appKanban()
    {
        return view($this->config->views['app-kanban'], $this->data);
    }
    
    function appInvoiceList()
    {
        return view($this->config->views['app-invoice-list'], $this->data);
    }
    
    function appInvoicePreview()
    {
        return view($this->config->views['app-invoice-preview'], $this->data);
    }
    
    function appInvoiceEdit()
    {
        return view($this->config->views['app-invoice-edit'], $this->data);
    }
    
    function appInvoiceAdd()
    {
        return view($this->config->views['app-invoice-add'], $this->data);
    }
    
    function appUserList()
    {
        return view($this->config->views['app-user-list'], $this->data);
    }
    
    function appUserViewAccount()
    {
        return view($this->config->views['app-user-view-account'], $this->data);
    }
    
    function appUserSecurity()
    {
        return view($this->config->views['app-user-security'], $this->data);
    }
    
    function appUserBilling()
    {
        return view($this->config->views['app-user-billing'], $this->data);
    }
    
    function appUserNotifications()
    {
        return view($this->config->views['app-user-notifications'], $this->data);
    }
    
    function appUserConnections()
    {
        return view($this->config->views['app-user-connections'], $this->data);
    }
    
    function appAccessRoles()
    {
        return view($this->config->views['app-access-roles'], $this->data);
    }
    
    function appAccessPermission()
    {
        return view($this->config->views['app-access-permission'], $this->data);
    }
    
    function pagesProfileUser()
    {
        return view($this->config->views['pages-profile-user'], $this->data);
    }
    
    function pagesProfileTeams()
    {
        return view($this->config->views['pages-profile-teams'], $this->data);
    }
    
    function pagesProfileProjects()
    {
        return view($this->config->views['pages-profile-projects'], $this->data);
    }
    
    function pagesProfileConnections()
    {
        return view($this->config->views['pages-profile-connections'], $this->data);
    }
    
    function pagesAccountSettingsAccount()
    {
        return view($this->config->views['pages-account-settings-account'], $this->data);
    }
    
    function pagesAccountSettingsSecurity()
    {
        return view($this->config->views['pages-account-settings-security'], $this->data);
    }
    
    function pagesAccountSettingsBilling()
    {
        return view($this->config->views['pages-account-settings-billing'], $this->data);
    }
    
    function pagesAccountSettingsNotifications()
    {
        return view($this->config->views['pages-account-settings-notifications'], $this->data);
    }
    
    function pagesAccountSettingsConnections()
    {
        return view($this->config->views['pages-account-settings-connections'], $this->data);
    }
    
    function pagesFaq()
    {
        return view($this->config->views['pages-faq'], $this->data);
    }
    
    function pagesPricing()
    {
        return view($this->config->views['pages-pricing'], $this->data);
    }
    
    function pagesHomeCenterLanding()
    {
        return view($this->config->views['pages-home-center-landing'], $this->data);
    }
    
    function pagesHomeCenterCategories()
    {
        return view($this->config->views['pages-home-center-categories'], $this->data);
    }
    
    function pagesHomeCenterArticle()
    {
        return view($this->config->views['pages-home-center-article'], $this->data);
    }
    
    function pagesMiscError()
    {
        return view($this->config->views['pages-misc-error'], $this->data);
    }
    
    function pagesMiscUnderMaintenance()
    {
        return view($this->config->views['pages-misc-under-maintenance'], $this->data);
    }
    
    function pagesMiscComingsoon()
    {
        return view($this->config->views['pages-misc-coming-soon'], $this->data);
    }
    
    function pagesMiscNotAuthorized()
    {
        return view($this->config->views['pages-misc-not-authorized'], $this->data);
    }
    
    function authLoginBasic()
    {
        return view($this->config->views['auth-login-basic'], $this->data);
    }
    
    function authLoginCover()
    {
        return view($this->config->views['auth-login-cover'], $this->data);
    }
    
    function authREgisterBasic()
    {
        return view($this->config->views['auth-register-basic'], $this->data);
    }
    
    function authREgisterCover()
    {
        return view($this->config->views['auth-register-cover'], $this->data);
    }
    
    function authREgistermultisteps()
    {
        return view($this->config->views['auth-register-multisteps'], $this->data);
    }
    
    function authVerifyEmailBasic()
    {
        return view($this->config->views['auth-verify-email-basic'], $this->data);
    }
    
    function authVerifyEmailcover()
    {
        return view($this->config->views['auth-verify-email-cover'], $this->data);
    }
    
    function authResetPasswordBasic()
    {
        return view($this->config->views['auth-reset-password-basic'], $this->data);
    }
    
    function authResetPasswordCover()
    {
        return view($this->config->views['auth-reset-password-cover'], $this->data);
    }
    
    function authForgotPasswordBasic()
    {
        return view($this->config->views['auth-forgot-password-basic'], $this->data);
    }
    
    function authForgotPasswordCover()
    {
        return view($this->config->views['auth-forgot-password-cover'], $this->data);
    }
    
    function authTwoStepsBasic()
    {
        return view($this->config->views['auth-two-steps-basic'], $this->data);
    }
    
    function authTwoStepsCover()
    {
        return view($this->config->views['auth-two-steps-cover'], $this->data);
    }
    
    function wizardCheckout()
    {
        return view($this->config->views['wizard-checkout'], $this->data);
    }
    
    function wizardPropertyListing()
    {
        return view($this->config->views['wizard-property-listing'], $this->data);
    }
    
    function wizardCreateDeal()
    {
        return view($this->config->views['wizard-create-deal'], $this->data);
    }
    
    function modalExamples()
    {
        return view($this->config->views['modal-examples'], $this->data);
    }
    
    function cardsBasics()
    {
        return view($this->config->views['cards-basics'], $this->data);
    }
    
    function cardsAdvance()
    {
        return view($this->config->views['cards-advance'], $this->data);
    }
    
    function cardsStatistics()
    {
        return view($this->config->views['cards-statistics'], $this->data);
    }
    
    function cardsAnalytics()
    {
        return view($this->config->views['cards-analytics'], $this->data);
    }
    
    function cardsActions()
    {
        return view($this->config->views['cards-actions'], $this->data);
    }
    
    function uiPages(string $param)
    {
        return view($this->config->views["ui-{$param}"], $this->data);
    }
    
    function extendeduiPages(string $param)
    {
        return view($this->config->views["extended-ui-{$param}"], $this->data);
    }
    
    function iconsPage(string $param)
    {
        return view($this->config->views["icons-{$param}"], $this->data);
    }
    
    function formsPage(string $param)
    {
        return view($this->config->views["forms-{$param}"], $this->data);
    }
}
