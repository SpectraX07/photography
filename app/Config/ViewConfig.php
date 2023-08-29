<?php
namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class ViewConfig extends BaseConfig
{

    public $views = [


        'auth-login-basic' => 'Views/backend/auth/login-basic',
        'analytics-dashboard' => 'Views/backend/dashboard/analytics',
        'super-admin' => 'Views/backend/users/admin-list',
        'ad-post' => 'Views/backend/advertisement/ad-post',
        'radio-list' => 'Views/backend/radio/radio-list',


        //not BEING USED

        'crm-dashboard' => 'Views/dashboard/crm',
        'ecommerce-dashboard' => 'Views/dashboard/ecommerce',

        'app-email' => 'Views/app/email',
        'app-chat' => 'Views/app/chat',
        'app-calendar' => 'Views/app/calendar',
        'app-kanban' => 'Views/app/kanban',
        'app-invoice-list' => 'Views/app/invoice-list',
        'app-invoice-preview' => 'Views/app/invoice-preview',
        'app-invoice-edit' => 'Views/app/invoice-edit',
        'app-invoice-add' => 'Views/app/invoice-add',
        'app-user-list' => 'Views/app/user-list',
        'app-user-view-account' => 'Views/app/user-view-account',
        'app-user-security' => 'Views/app/user-security',
        'app-user-billing' => 'Views/app/user-billing',
        'app-user-notifications' => 'Views/app/user-notifications',
        'app-user-connections' => 'Views/app/user-connections',
        'app-access-roles' => 'Views/app/access-roles',
        'app-access-permission' => 'Views/app/access-permission',

        'pages-profile-user' => 'Views/pages/profile-user',
        'pages-profile-teams' => 'Views/pages/profile-teams',
        'pages-profile-projects' => 'Views/pages/profile-projects',
        'pages-profile-connections' => 'Views/pages/profile-connections',
        'pages-account-settings-account' => 'Views/pages/account-settings-account',
        'pages-account-settings-security' => 'Views/pages/account-settings-security',
        'pages-account-settings-billing' => 'Views/pages/account-settings-billing',
        'pages-account-settings-notifications' => 'Views/pages/account-settings-notifications',
        'pages-account-settings-connections' => 'Views/pages/account-settings-connections',
        'pages-faq' => 'Views/pages/faq',
        'pages-pricing' => 'Views/pages/pricing',
        'pages-home-center-categories' => 'Views/pages/home-center-categories',
        'pages-home-center-article' => 'Views/pages/home-center-article',
        'pages-misc-error' => 'Views/pages/misc-error',
        'pages-misc-under-maintenance' => 'Views/pages/misc-under-maintenance',
        'pages-misc-coming-soon' => 'Views/pages/misc-coming-soon',
        'pages-misc-not-authorized' => 'Views/pages/misc-not-authorized',

        'auth-login-cover' => 'Views/auth/login-cover',
        'auth-register-basic' => 'Views/auth/register-basic',
        'auth-register-cover' => 'Views/auth/register-cover',
        'auth-register-multisteps' => 'Views/auth/register-multisteps',
        'auth-verify-email-basic' => 'Views/auth/verify-email-basic',
        'auth-verify-email-cover' => 'Views/auth/verify-email-cover',
        'auth-reset-password-basic' => 'Views/auth/reset-password-basic',
        'auth-reset-password-cover' => 'Views/auth/reset-password-cover',
        'auth-forgot-password-basic' => 'Views/auth/forgot-password-basic',
        'auth-forgot-password-cover' => 'Views/auth/forgot-password-cover',
        'auth-two-steps-basic' => 'Views/auth/two-steps-basic',
        'auth-two-steps-cover' => 'Views/auth/two-steps-cover',

        'wizard-checkout' => 'Views/wizard/checkout',
        'wizard-property-listing' => 'Views/wizard/property-listing',
        'wizard-create-deal' => 'Views/wizard/create-deal',

        'modal-examples' => 'Views/modals/examples',

        'cards-basics' => 'Views/cards/basics',
        'cards-advance' => 'Views/cards/advance',
        'cards-statistics' => 'Views/cards/statistics',
        'cards-analytics' => 'Views/cards/analytics',
        'cards-actions' => 'Views/cards/actions',

        'ui-accordion' => 'Views/ui/accordion',
        'ui-alerts' => 'Views/ui/alerts',
        'ui-badges' => 'Views/ui/badges',
        'ui-buttons' => 'Views/ui/buttons',
        'ui-carousel' => 'Views/ui/carousel',
        'ui-collapse' => 'Views/ui/collapse',
        'ui-dropdowns' => 'Views/ui/dropdowns',
        'ui-footer' => 'Views/ui/footer',
        'ui-list-groups' => 'Views/ui/list-groups',
        'ui-modals' => 'Views/ui/modals',
        'ui-navbar' => 'Views/ui/navbar',
        'ui-offcanvas' => 'Views/ui/offcanvas',
        'ui-pagination-breadcrumbs' => 'Views/ui/pagination-breadcrumbs',
        'ui-progress' => 'Views/ui/progress',
        'ui-spinners' => 'Views/ui/spinners',
        'ui-tabs-pills' => 'Views/ui/tabs-pills',
        'ui-toasts' => 'Views/ui/toasts',
        'ui-tooltips-popovers' => 'Views/ui/tooltips-popovers',
        'ui-typography' => 'Views/ui/typography',

        'extended-ui-avatar' => 'Views/extended-ui/avatar',
        'extended-ui-blockui' => 'Views/extended-ui/blockui',
        'extended-ui-drag-and-drop' => 'Views/extended-ui/drag-and-drop',
        'extended-ui-media-player' => 'Views/extended-ui/media-player',
        'extended-ui-perfect-scrollbar' => 'Views/extended-ui/perfect-scrollbar',
        'extended-ui-star-ratings' => 'Views/extended-ui/star-ratings',
        'extended-ui-sweetalert2' => 'Views/extended-ui/sweetalert2',
        'extended-ui-text-divider' => 'Views/extended-ui/text-divider',
        'extended-ui-timeline-basic' => 'Views/extended-ui/timeline-basic',
        'extended-ui-timeline-fullscreen' => 'Views/extended-ui/timeline-fullscreen',
        'extended-ui-tour' => 'Views/extended-ui/tour',
        'extended-ui-treeview' => 'Views/extended-ui/treeview',
        'extended-ui-misc' => 'Views/extended-ui/misc',

        'icons-tabler' => 'Views/icons/tabler',
        'icons-font-awesome' => 'Views/icons/font-awesome',

        'forms-basic-inputs' => 'Views/forms/elements/basic-inputs',
        'forms-input-groups' => 'Views/forms/elements/input-groups',
        'forms-custom-options' => 'Views/forms/elements/custom-options',
        'forms-editors' => 'Views/forms/elements/editors',
        'forms-file-upload' => 'Views/forms/elements/file-upload',
        'forms-pickers' => 'Views/forms/elements/pickers',
        'forms-selects' => 'Views/forms/elements/selects',
        'forms-sliders' => 'Views/forms/elements/sliders',
        'forms-switches' => 'Views/forms/elements/switches',
        'forms-extras' => 'Views/forms/elements/extras',
        'forms-vertical' => 'Views/forms/layouts/vertical',
        'forms-horizontal' => 'Views/forms/layouts/horizontal',
        'forms-maps-leaflet' => 'Views/forms/layouts/maps-leaflet',
        'forms-charts-chartjs' => 'Views/forms/layouts/charts-chartjs',
        'forms-charts-apex' => 'Views/forms/layouts/charts-apex',
        'forms-tables-datatables-extensions' => 'Views/forms/layouts/tables-datatables-extensions',
        'forms-tables-datatables-advanced' => 'Views/forms/layouts/tables-datatables-advanced',
        'forms-tables-datatables-basic' => 'Views/forms/layouts/tables-datatables-basic',
        'forms-tables-basic' => 'Views/forms/layouts/tables-basic',
        'forms-sticky' => 'Views/forms/layouts/sticky',
        'forms-numbered' => 'Views/forms/wizard/numbered',
        'forms-icons' => 'Views/forms/wizard/icons',
        'forms-validation' => 'Views/forms/validation',
    ];

    // Layout for the views to extend
    public $common = [
        'layout' => 'Views/backend/layouts/_default',
        'sidebar' => 'Views/backend/layouts/_sidebar',
    ];
}
