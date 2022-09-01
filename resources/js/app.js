import './bootstrap';
import './nav.js';
//..
const Swal = require('sweetalert2')
Swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
})

import { livewire_hot_reload } from 'virtual:livewire-hot-reload'

livewire_hot_reload();
