<?php

return [
    'sidebar' => [
        [
            'type' => 'group',
            'label' => 'Home',
            'required_features' => [1],
            'children' => [
                [
                    'type' => 'single',
                    'label' => 'Home',
                    'icon' => 'icon-home',
                    'url' => 'home',
                    'active' => '\View::shared("menu_active") == "home"',
                ]
            ]
        ],

        [
            'type' => 'group',
            'label' => 'Accounts',
            'children' => [
                [
                    'type' => 'tree',
                    'label' => 'User',
                    'icon' => 'icon-home',
                    'children' => [
                        [
                            'label' => 'New Pemda',
                            'active' => '\View::shared("submenu_active") == "pemda-new"',
                            'url' => 'user/pemda/create',
                            'required_features' => [4],
                        ],
                        [
                            'label' => 'User List',
                            'url' => 'user',
                            'required_features' => [2],
                            'active' => '\View::shared("submenu_active") == "user-list"'
                        ],
                        [
                            'label' => 'Log Activity',
                            'active' => '\View::shared("submenu_active") == "user-log"',
                            'url' => 'user/activity',
                            'required_features' => [7],
                        ],
                        [
                            'type' => 'group',
                            'required_configs' => [40],
                            'required_features' => [92],
                            'children' => [
                                [
                                    'label' => '[Response] Pin Changed Forgot Password',
                                    'url' => 'user/autoresponse/pin-changed-forgot-password',
                                ],
                                [
                                    'label' => '[Response] Pin Forgot',
                                    'url' => 'user/autoresponse/pin-forgot',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
        [
            'type' => 'group',
            'label' => 'Browse',
            'children' => [
                [
                    'label' => 'Vendor Penyedotan',
                    'type' => 'tree',
                    'icon' => 'fa fa-university',
                    'required_features' => [323,324,325,326,327,348],
                    'children' => [
                        [
                            'label' => 'New Vendor Penyedotan',
                            'url' => 'tukang-sedot/create',
                            'active' => '\View::shared("submenu_active") == "tukang-sedot-new"',
                            'required_features' => [325],
                        ],
                        [
                            'label' => 'Vendor Penyedotan List',
                            'url' => 'outlet/tukang-sedot',
                            'active' => '\View::shared("submenu_active") == "tukang-sedot-list"',
                            'required_features' => [323,324,326,327],
                        ],
                        [
                            'label' => 'Candidate List',
                            'url' => 'tukang-sedot/candidate',
                            'required_features' => [323,324,326,327],
                            'active' => '\View::shared("submenu_active") == "tukang-sedot-candidate"'
                        ],
                        
                    ]
                ],
                [
                    'label' => 'Vendor Pembangunan',
                    'type' => 'tree',
                    'icon' => 'fa fa-home',
                    'required_features' => [323,324,325,326,327,348],
                    'children' => [
                        [
                            'label' => 'New Vendor Pembangunan',
                            'url' => 'kontraktor/create',
                            'active' => '\View::shared("submenu_active") == "kontraktor-new"',
                            'required_features' => [325],
                        ],
                        [
                            'label' => 'Vendor Pembangunan List',
                            'url' => 'outlet/kontraktor',
                            'active' => '\View::shared("submenu_active") == "kontraktor-list"',
                            'required_features' => [323,324,326,327],
                        ],
                        [
                            'label' => 'Candidate List',
                            'url' => 'kontraktor/candidate',
                            'required_features' => [323,324,326,327],
                            'active' => '\View::shared("submenu_active") == "kontraktor-candidate"'
                        ],
                        
                    ]
                ],
                [
                    'label' => 'Accommodation',
                    'icon' => 'fa fa-car',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New Acommodation',
                            'active' => '\View::shared("submenu_active") == "accommodation-new"',
                            'url' => 'accommodation/create',
                        ],
                       
                        [
                            'label' => 'Acommodation List',
                            'active' => '\View::shared("submenu_active") == "accommodation-list"',
                            'url' => 'accommodation',
                        ],
                    ]
                ],
                [
                    'label' => 'Pendapatan Vendor',
                    'icon' => 'fa fa-money',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New Pengosongan Tangki',
                            'active' => '\View::shared("submenu_active") == "commission-sedot-wc-new"',
                            'url' => 'tukang-sedot/commission/create',
                        ],
                       
                        [
                            'label' => 'Pengosongan Tangki List',
                            'active' => '\View::shared("submenu_active") == "commission-sedot-wc-list"',
                            'url' => 'tukang-sedot/commission',
                        ],
                         [
                            'label' => 'New Survey Vendor Pembangunan',
                            'active' => '\View::shared("submenu_active") == "commission-survey-new"',
                            'url' => 'kontraktor/commission/create',
                        ],
                       
                        [
                            'label' => 'List Survey Vendor Pembangunan',
                            'active' => '\View::shared("submenu_active") == "commission-survey-list"',
                            'url' => 'kontraktor/commission',
                        ],
                    ]
                ],
                [
                    'label' => 'Paket Pembangunan',
                    'icon' => 'icon-wrench',
                    'url' => 'paket',
                    'active' => '\View::shared("menu_active") == "paket"'
                ],
                [
                    'label' => 'Tarif Pengosongan',
                    'icon' => 'fa fa-shopping-cart',
                    'url' => 'tarif',
                    'active' => '\View::shared("menu_active") == "tarif"'
                ],
                [
                    'label' => 'Global Pendapatan Vendor',
                    'icon' => 'fa fa-cog',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'Pengosongan Tangki',
                            'active' => '\View::shared("submenu_active") == "setting-global-commisission-sedot"',
                            'url' => 'setting/setting-global-commission-sedot-wc',
                        ],
                       
                        [
                            'label' => 'Survey Vendor Pembangunan',
                            'active' => '\View::shared("submenu_active") == "setting-global-commisission-survey"',
                            'url' => 'setting/setting-global-commission-survey',
                        ],
                    ]
                ],
                [
                    'label' => 'Penarikan Vendor',
                    'icon' => 'fa fa-money',
                    'url' => 'merchant/withdrawal'
                ],
                [
                    'label' => 'Setting',
                    'icon' => 'icon-wrench',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'Setting Waktu Sedot Rutin',
                            'active' => '\View::shared("submenu_active") == "setting-jangka-waktu"',
                            'url' => 'setting/sedot-rutin-jangka-waktu',
                        ],
                        [
                            'label' => 'Volume Harian Perorang',
                            'active' => '\View::shared("submenu_active") == "setting-volume"',
                            'url' => 'setting/volume',
                        ],
                    ]
                ],
                [
                    'label' => 'User Rating',
                    'type' => 'tree',
                    'icon' => 'icon-star',
                    'children' => [
                        [
                            'label' => 'User Rating List',
                            'url' => 'user-rating',
                            'required_features' => [352],
                        ],
                        [
                            'label' => 'User Rating Setting',
                            'url' => 'user-rating/setting',
                            'required_features' => [353],
                        ],
                    ]
                ],
                [
                    'label' => 'Kegiatan',
                    'icon' => 'fa fa-calendar',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New Kegiatan',
                            'active' => '\View::shared("submenu_active") == "event-new"',
                            'url' => 'event/create',
                        ],
                       
                        [
                            'label' => 'Kegiatan List',
                            'active' => '\View::shared("submenu_active") == "event-list"',
                            'url' => 'event',
                        ],
                    ]
                ],
                [
                    'label' => 'Artikel',
                    'icon' => 'fa fa-calendar',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New Artikel',
                            'active' => '\View::shared("submenu_active") == "artikel-new"',
                            'url' => 'artikel/create',
                        ],
                       
                        [
                            'label' => 'Artikel List',
                            'active' => '\View::shared("submenu_active") == "artikel-list"',
                            'url' => 'artikel',
                        ],
                    ]
                ],
            ],
        ],
        [
            'type' => 'group',
            'label' => 'Order',
            'children' => [
                [
                    'type' => 'tree',
                    'label' => 'Transaction Pengosongan Tangki',
                    'icon' => 'fa fa-shopping-cart',
                    'children' => [
                        [
                            'label' => 'Pending',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-sedot-wc-pending"',
                            'url' => 'transaction/sedot/pending',
                            
                        ],
                        [
                            'label' => 'Proses',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-sedot-wc-proses"',
                            'url' => 'transaction/sedot/proses'
                        ],
                        [
                            'label' => 'Selesai',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-sedot-wc-selesai"',
                            'url' => 'transaction/sedot/selesai'
                        ],
                        [
                            'label' => 'Completed',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-sedot-wc-complete"',
                            'url' => 'transaction/sedot/completed',
                        ],
                    ]
                ],
                [
                    'type' => 'tree',
                    'label' => 'Transaction Vendor Pembangunan',
                    'icon' => 'icon-wrench',
                    'children' => [
                        [
                            'label' => 'Pending',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-kontraktor-pending"',
                            'url' => 'transaction/kontraktor/pending'
                        ],
                        [
                            'label' => 'Proses',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-kontraktor-proses"',
                            'url' => 'transaction/kontraktor/proses',
                            
                        ],
                        [
                            'label' => 'Selesai',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-kontraktor-selesai"',
                            'url' => 'transaction/kontraktor/selesai',
                            
                        ],
                        [
                            'label' => 'Completed',
                            'required_features' => [69],
                            'active' => '\View::shared("submenu_active") == "transaction-kontraktor-complete"',
                            'url' => 'transaction/kontraktor/completed',
                        ],
                    ],
                    
                ],
                [
                    'label' => 'Failed Void Payment',
                    'required_features' => [299],
                    'active' => '\View::shared("menu_active") == "failed-void-payment"',
                    'url' => 'transaction/failed-void-payment',
                    'icon' => 'fa fa-exclamation-triangle'
                ],
                [
                        'label' => 'Points History',
                        'required_features' => [93],
                        'active' => '\View::shared("menu_active") == "balance"',
                        'url' => 'transaction/balance',
                        'icon' => 'fa fa-clock-o'
                ],
                [
                    'type' => 'tree',
                    'label' => 'Order Settings',
                    'icon' => 'fa fa-cogs',
                    'children' => [
                        [
                            'label' => 'Setting Fee',
                            'required_features' => [250],
                            'active' => '\View::shared("submenu_active") == "setting-fee"',
                            'url' => 'transaction/setting/all-fee'
                        ],
                        [
                            'label' => 'Available Payment Method',
                            'required_features' => [250],
                            'active' => '\View::shared("submenu_active") == "setting-payment-method"',
                            'url' => 'transaction/setting/available-payment'
                        ],
//                        [
//                            'label' => 'Available Delivery',
//                            'required_features' => [320],
//                            'active' => '\View::shared("submenu_active") == "delivery-setting-available"',
//                            'url' => 'transaction/setting/available-delivery'
//                        ],
                        [
                            'label' => 'Setting Refund Reject Order',
                            'required_features' => [250],
                            'active' => '\View::shared("submenu_active") == "refund-reject-order"',
                            'url' => 'transaction/setting/refund-reject-order'
                        ]
                    ]
                ],
            ]
        ],

        [
            'type' => 'group',
            'label' => 'Settings',
            'children' => [
                [
                    'label' => 'Mobile Apps Home',
                    'required_features' => [15, 16, 17, 18, 144, 145, 146, 147, 241, 246],
                    'active' => '\View::shared("menu_active") == "setting-home"',
                    'url' => 'setting/home',
                    'icon' => 'icon-screen-tablet '
                ],
                
                [
                    'label' => 'Version Control',
                    'required_features' => [354],
                    'active' => '\View::shared("menu_active") == "setting-version"',
                    'url' => 'version',
                    'icon' => 'fa fa-info-circle'
                ],
                [
                    'label' => 'URL Playsotre',
                    'active' => '\View::shared("menu_active") == "setting-url-app-rating"',
                    'url' => 'setting/url-app-rating',
                    'icon' => 'fa fa-play-circle'
                ],
                [
                    'label' => 'Intro Apps',
                    'required_features' => [168],
                    'required_configs' => [108],
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'Intro First Install',
                            'url' => 'setting/intro/first'
                        ]
                    ],
                    'icon' => 'icon-screen-tablet'
                ],
                [
                    'label' => 'Maintenance Mode',
                    'required_features' => [220],
                    'url' => 'setting/maintenance-mode',
                    'icon' => 'icon-wrench'
                ],
                [
                    'label' => 'Time Expired OTP and Email',
                    'required_features' => [251,252],
                    'url' => 'setting/time-expired',
                    'icon' => 'fa fa-envelope'
                ],
            ],
        ],
        [
            'type' => 'group',
            'label' => 'CRM',
            'children' => [
                [
                    'label' => 'CRM Setting',
                    'required_features' => [],
                    'icon' => 'icon-settings',
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'Text Replace',
                            'required_features' => [96],
                            'active' => '\View::shared("submenu_active") == "textreplace"',
                            'url' => 'textreplace'
                        ],
                        [
                            'label' => 'Email Header & Footer',
                            'required_features' => [97],
                            'active' => '\View::shared("submenu_active") == "email"',
                            'url' => 'email-header-footer'
                        ]
                    ]
                ],
                [
                    'label' => 'Contact Us',
                    'required_features' => [83,84],
                    'active' => '\View::shared("submenu_active") == "enquiries-list"',
                    'url' => 'enquiries',
                    'icon' => 'icon-action-undo'
                ],
                [
                    'label' => 'Forward Contact Us',
                    'required_features' => [83,84],
                    'active' => '\View::shared("submenu_active") == "contact-us-autoresponse-forward-contact-us"',
                    'url' => 'autoresponse/contact-us/forward-contact-us',
                    'icon' => 'icon-action-undo'
                ],
            ]
        ],
        [
            'type' => 'group',
            'label' => 'About',
            'children' => [
                [
                    'label' => 'Panduan Mitra Sedot',
                    'active' => '\View::shared("submenu_active") == "panduan-mitra-sedot"',
                    'url' => 'setting/panduan-mitra-sedot',
                    'icon' => 'fa fa-university',
                ],
                [
                    'label' => 'Panduan Mitra Vendor Pembangunan',
                    'active' => '\View::shared("submenu_active") == "panduan-mitra-kontraktor"',
                    'url' => 'setting/panduan-mitra-kontraktor',
                    'icon' => 'fa fa-home',
                ],
                [
                    'label' => 'FAQ Customer',
                    'required_features' => [],
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New FAQ',
                            'required_features' => [89],
                            'url' => 'setting/faq/create'
                        ],
                        [
                            'label' => 'List FAQ',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-list"',
                            'url' => 'setting/faq'
                        ],
                        [
                            'label' => 'Sorting FAQ List',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-sort"',
                            'url' => 'setting/faq/sort'
                        ],
                    ],
                    'icon' => 'icon-question'
                ],
                [
                    'label' => 'FAQ Vendor Penyedotan',
                    'required_features' => [],
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New FAQ',
                            'required_features' => [89],
                            'url' => 'setting/faq/sedot/create'
                        ],
                        [
                            'label' => 'List FAQ',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-list-sedot"',
                            'url' => 'setting/faq/sedot'
                        ],
                        [
                            'label' => 'Sorting FAQ List',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-sort-sedot"',
                            'url' => 'setting/faq/sedot/sort'
                        ],
                    ],
                    'icon' => 'icon-question'
                ],
                [
                    'label' => 'FAQ Vendor Pembangunan',
                    'required_features' => [],
                    'type' => 'tree',
                    'children' => [
                        [
                            'label' => 'New FAQ',
                            'required_features' => [89],
                            'url' => 'setting/faq/kontraktor/create'
                        ],
                        [
                            'label' => 'List FAQ',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-list-kontraktor"',
                            'url' => 'setting/faq/kontraktor'
                        ],
                        [
                            'label' => 'Sorting FAQ List',
                            'required_features' => [88],
                            'active' => '\View::shared("submenu_active") == "faq-sort-kontraktor"',
                            'url' => 'setting/faq/kontraktor/sort'
                        ],
                    ],
                    'icon' => 'icon-question'
                ],
                
            ],
        ],
    ],
];
