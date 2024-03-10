<?php

return [
    'ajax_error' => 'Server error! Please refresh the site!',
    'approved' => 'Approved',
    'cancel' => 'Cancel',
    'copied' => 'Copied to clipboard',
    'created_at' => 'Created',
    'deactivate' => 'Deactivate',
    'delete' => 'Delete',
    'disabled' => 'Disabled',
    'error' => 'Error',
    'expiration_extended' => 'Your internet access have been extended until :new_date.',
    'extend' => 'Extend',
    'generate_new_pwd' => 'Generate new password',
    'has_internet' => 'Your internet access is active until: :ends',
    'internet' => 'Internet',
    'internet_access' => 'Internet access',
    'laptop' => 'Laptop',
    'mac_address' => 'MAC address',
    'mac_comment' => 'eg. Asus Laptop, Ethernet converter',
    'mac_status_changed' => 'Your Mac address\'s status have been changed.',
    'mac_status_changed_desc' => 'An administrator changed the status of :mac to :status.',
    'no_internet' => 'You are not allowed to access the internet at the moment.',
    'nothing_to_show' => 'Nothing to show',
    'registered_devices_info' => 'To use wired internet, you must first register your device. For security reasons, system administrators have to accept this manually, so we kindly ask for your patience. We try to accept requests as soon as possible.',
    'rejected' => 'Rejected',
    'report' => 'Description of the problem',
    'report_fault' => 'Report internet fault',
    'report_fault_availability' => 'When are you available in your room?',
    'report_fault_can_enter_room' => 'I give permission for the system administrators to enter my room in spite of my absence, if necessary, to fix the error.',
    'report_fault_desc' => 'If you have any problem with the internet, please report it here. To make troubleshooting the problem as smooth as possible, describe the error as precisely as possible.',
    'report_fault_error_message' => 'If you see an error message, please copy it here.',
    'report_fault_os' => 'What is your device\'s operating sytem?',
    'report_fault_router_unavailable' => 'We can see that the router in room :room is not available. The system administrators should know this already, but if the problem persists, please  <a href="mailto:root@eotvos.elte.hu"> contact them here</a>.',
    'report_fault_tries' => 'What have you tried so far? Does it work on other devices?',
    'report_fault_when' => 'Since when and how often did the problem occur?',
    'request' => 'Undo',
    'requested' => 'Requested',
    'router_descr' => 'If the router is not available in your room, unplug it and plug it back in. If that doesn\'t solve the problem, <a href="mailto:root@eotvos.elte.hu">reach out to the system administrators</a>!',
    'router_warn' => 'Any modification to the router other than the above is prohibited (unplugging, plugging it into another connector, connecting another device to it with a cable, etc.), and is considered vandalism!',
    'show' => 'Show!',
    'state' => 'State',
    'update' => 'Update',
    'user_id' => 'User id',
    'user_os' => 'Your operating system',
    'wifi_connections' => 'WiFi Connections',
    'wifi_password' => 'Wifi password',
    'wifi_password_info' => 'You can connect to <code>' . config('internet.wifi_ssid') . '</code> with the credentials listed below. You can change your password to a randomly generated one.<br>After you were granted access to the network or after you have generated a new password, it might take ca. 10 minutes to the changes to propagate through all of our systems. During this time you cannot access the wifi network. It is not recommended to generate newer passwords during that time as it might delay the propagation process for you.<br>If your device asks for more information to connect to the network, you can try these:<ol><li>EAP method: PEAP</li><li>Phase 2 authentication: MSCHAPv2</li><li>CA certificate: Use system certificate</li><li>Domain: <code>' . config('internet.wifi_domain') . '</code></li><li>Username: wifi username (see below)</li><li>Anonymous identity: same username</li><li>Password: wifi password (see below)</li></ol>On Windows, it might fail at first. In that case, forget the network, then follow <a href="' . config('internet.wifi_instructions') . '" target="_blank">these instructions</a>.<br>If the problem persists, <a href="mailto:' . config('contacts.mail_sysadmin') . '">ask the admins for help</a>.',
    'wifi_password_null' => 'You have no wifi password at the moment. You can generate one below.',
    'wifi_password_reset_warning' => 'You must log in again if you request a new password! It might take a few minutes to update.',
    'wifi_user' => 'Wifi username',
    'your_registered_devices' => 'Your registered devices',
];
