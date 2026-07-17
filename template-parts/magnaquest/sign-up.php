<?php
/**
 * Magnaquest Registration Form
 */
?>
<style>
.mq-auth-container {
    max-width: 500px;
    margin: 60px auto;
    padding: 40px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 16px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    font-family: 'Inter', sans-serif;
}
.mq-auth-title {
    text-align: center;
    font-size: 24px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 30px;
}
.mq-form-row {
    display: flex;
    gap: 15px;
}
.mq-form-row .mq-form-group {
    flex: 1;
}
.mq-form-group {
    margin-bottom: 20px;
}
.mq-form-label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    color: #4a4a4a;
    margin-bottom: 8px;
}
.mq-form-input {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #e2e8f0;
    border-radius: 8px;
    font-size: 15px;
    transition: all 0.2s ease;
    background: #f8fafc;
}
.mq-form-input:focus {
    outline: none;
    border-color: #E63946;
    background: #fff;
    box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
}
.mq-submit-btn {
    width: 100%;
    padding: 14px;
    background: #E63946; /* BusinessDay Red */
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.1s ease;
    margin-top: 10px;
}
.mq-submit-btn:hover {
    background: #D62828;
}
.mq-submit-btn:active {
    transform: scale(0.98);
}
.mq-submit-btn.loading {
    opacity: 0.7;
    pointer-events: none;
}
.mq-auth-footer {
    text-align: center;
    margin-top: 24px;
    font-size: 14px;
    color: #64748b;
}
.mq-auth-footer a {
    color: #E63946;
    text-decoration: none;
    font-weight: 600;
}
.mq-auth-footer a:hover {
    text-decoration: underline;
}
.mq-alert {
    padding: 12px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 14px;
    display: none;
}
.mq-alert.error {
    background: #fef2f2;
    color: #b91c1c;
    border: 1px solid #fecaca;
    display: block;
}
.mq-alert.success {
    background: #f0fdf4;
    color: #15803d;
    border: 1px solid #bbf7d0;
    display: block;
}
.mq-password-wrapper {
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
}
.mq-password-wrapper .mq-form-input {
    padding-right: 48px;
}
.mq-password-toggle {
    position: absolute;
    right: 12px;
    z-index: 10;
    background: none;
    border: none;
    padding: 4px;
    cursor: pointer;
    color: #64748b;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.2s ease;
}
.mq-password-toggle:hover {
    color: #E63946;
}
.mq-password-toggle:focus {
    outline: none;
}
.mq-eye-icon {
    width: 20px !important;
    height: 20px !important;
    display: block;
}
</style>

<div class="mq-auth-container">
    <h2 class="mq-auth-title">Create your account</h2>
    
    <div id="mq-register-alert" class="mq-alert"></div>

    <form id="mq-register-form">
        <div class="mq-form-row">
            <div class="mq-form-group">
                <label class="mq-form-label" for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" class="mq-form-input" required placeholder="John">
            </div>
            <div class="mq-form-group">
                <label class="mq-form-label" for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="mq-form-input" required placeholder="Doe">
            </div>
        </div>
        
        <div class="mq-form-group">
            <label class="mq-form-label" for="email">Email Address</label>
            <input type="email" id="email" name="email" class="mq-form-input" required placeholder="you@example.com"  oninput="this.value = this.value.toLowerCase();">
        </div>
        
        <div class="mq-form-group">
            <label class="mq-form-label" for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="mq-form-input" placeholder="+234...">
        </div>
        
        <div class="mq-form-group">
            <label class="mq-form-label" for="password">Password</label>
            <div class="mq-password-wrapper">
                <input type="password" id="password" name="password" class="mq-form-input" required placeholder="••••••••">
                <button type="button" class="mq-password-toggle" aria-label="Toggle password visibility">
                    <svg class="mq-eye-icon eye-show" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="mq-eye-icon eye-hide" style="display: none;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88L3 3m12 12l6 6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <input type="hidden" name="action" value="mq_register">
        <input type="hidden" name="security" value="<?php echo wp_create_nonce('mq_auth_nonce'); ?>">
		<input type="hidden" name="redirect_to" id="redirect_to" value="">

<input type="hidden" name="invite_key" id="invite_key" value="">
<input type="hidden" name="group_id" id="group_id" value="">
<input type="hidden" name="group_level_id" id="group_level_id" value="">

<button type="submit" class="mq-submit-btn" id="mq-register-btn">Sign Up</button>
		
		
    </form>

    <div class="mq-auth-footer">
        Already have an account? <a href="/login">Sign in</a>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Password visibility toggle
    const toggleBtn = document.querySelector('.mq-password-toggle');
    if (toggleBtn) {
        const passwordInput = document.getElementById('password');
        const showIcon = toggleBtn.querySelector('.eye-show');
        const hideIcon = toggleBtn.querySelector('.eye-hide');

        toggleBtn.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showIcon.style.display = 'none';
                hideIcon.style.display = 'block';
            } else {
                passwordInput.type = 'password';
                showIcon.style.display = 'block';
                hideIcon.style.display = 'none';
            }
        });
    }


	//leakypayy code
	    // Populate redirect_to hidden input
    // Populate redirect_to hidden input
    const redirectInput = document.getElementById('redirect_to');
    if (redirectInput) {
        const urlParams = new URLSearchParams(window.location.search);
        let redirectTo = urlParams.get('redirect_to');
        if (!redirectTo && document.referrer) {
            try {
                const refUrl = new URL(document.referrer);
                const currentUrl = new URL(window.location.href);
                if (refUrl.host === currentUrl.host && 
                    !refUrl.pathname.includes('/login') && 
                    !refUrl.pathname.includes('/sign-in') &&
                    !refUrl.pathname.includes('/sign-up')) {
                    redirectTo = document.referrer;
                }
            } catch(e) {}
        }
        if (redirectTo) {
            redirectInput.value = redirectTo;
        }
    }

    // Group invite prepopulation
    async function populateGroupInviteDetails() {
        const urlParams = new URLSearchParams(window.location.search);
        const inviteKey = urlParams.get('invite_key');

        if (!inviteKey) {
            return;
        }

        try {
            const response = await fetch(
                '/wp-json/businessday/v1/group-invite?invite_key=' + encodeURIComponent(inviteKey)
            );

            const data = await response.json();

            console.log('Group invite response:', data);

            if (!data.success) {
                console.log('Invite lookup failed:', data);
                return;
            }

            if (data.status !== 'pending') {
                console.log('Invite is not pending:', data.status);
                return;
            }

            function setValue(selector, value) {
                const field = document.querySelector(selector);
                if (field && value !== undefined && value !== null) {
                    field.value = value;
                    field.dispatchEvent(new Event('input', { bubbles: true }));
                    field.dispatchEvent(new Event('change', { bubbles: true }));
                }
            }

            setValue('#firstName', data.first_name);
            setValue('#lastName', data.last_name);
            setValue('#email', data.email);

            setValue('#invite_key', inviteKey);
            setValue('#group_id', data.group_id);
            setValue('#group_level_id', data.level_id);

            const emailField = document.querySelector('#email');
            if (emailField) {
                emailField.readOnly = true;
            }

        } catch (error) {
            console.log('Invite prepopulation error:', error);
        }
    }

    populateGroupInviteDetails();

    const form = document.getElementById('mq-register-form');
	
	

   // const form = document.getElementById('mq-register-form');
    const alertBox = document.getElementById('mq-register-alert');
    const btn = document.getElementById('mq-register-btn');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset alert
        alertBox.className = 'mq-alert';
        alertBox.innerHTML = '';
        
        btn.classList.add('loading');
        btn.innerHTML = 'Creating account...';

        const formData = new FormData(form);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            btn.classList.remove('loading');
            btn.innerHTML = 'Sign Up';

            if (data.success) {
                if (data.data.tokenObject) {
                    localStorage.setItem('selfcareJWT', JSON.stringify(data.data.tokenObject));
                }
                alertBox.className = 'mq-alert success';
                alertBox.innerHTML = data.data.message;
                form.reset();
                setTimeout(() => {
                    window.location.href = data.data.redirect;
                }, 2000);
            } else {
                alertBox.className = 'mq-alert error';
                alertBox.innerHTML = data.data.message;
            }
        })
        .catch(error => {
            btn.classList.remove('loading');
            btn.innerHTML = 'Sign Up';
            alertBox.className = 'mq-alert error';
            alertBox.innerHTML = 'A network error occurred. Please try again.';
        });
    });
});

//leakypay code for prepopulate-1
const firstNameInput = document.querySelector('#firstName');
const lastNameInput  = document.querySelector('#lastName');
const emailInput     = document.querySelector('#email');
const phoneInput     = document.querySelector('#phone');
const passwordInput  = document.querySelector('#password');

const form           = document.querySelector('#mq-register-form');
const alertBox       = document.querySelector('#mq-register-alert');
const submitBtn      = document.querySelector('#mq-register-btn');
const redirectInput  = document.querySelector('#redirect_to');

setValue('#firstName', data.first_name);
setValue('#lastName', data.last_name);
setValue('#email', data.email);





//LEakypay signup prepoplate code-2 bhagwant
document.addEventListener('DOMContentLoaded', async function () {

	const params = new URLSearchParams(window.location.search);
	const inviteKey = params.get('invite_key');

	if (!inviteKey) {
		return;
	}

	const response = await fetch(
		'/wp-json/businessday/v1/group-invite?invite_key=' + encodeURIComponent(inviteKey)
	);

	const data = await response.json();

	if (!data.success) {
		console.log('Invite lookup failed', data);
		return;
	}

	if (data.status !== 'pending') {
		console.log('Invite is not pending');
		return;
	}

	function setValue(selector, value) {
		const field = document.querySelector(selector);
		if (field && value) {
			field.value = value;
			field.dispatchEvent(new Event('input', { bubbles: true }));
			field.dispatchEvent(new Event('change', { bubbles: true }));
		}
	}

	setValue('input[name="email"]', data.email);
	setValue('input[name="first_name"]', data.first_name);
	setValue('input[name="last_name"]', data.last_name);

	localStorage.setItem('bd_group_invite_key', inviteKey);
	localStorage.setItem('bd_group_id', data.group_id);
});
</script>