<?php
/**
 * Magnaquest Login Form
 */
?>
<style>
.mq-auth-container {
    max-width: 400px;
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
.mq-forgot-link {
    font-size: 13px;
    color: #E63946; /* High-contrast BusinessDay Red */
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s ease;
}
.mq-forgot-link:hover {
    color: #D62828;
    text-decoration: underline;
}
</style>

<div class="mq-auth-container">
    <h2 class="mq-auth-title">Log in to your account</h2>
    
    <div id="mq-login-alert" class="mq-alert"></div>

    <form id="mq-login-form">
        <div class="mq-form-group">
            <label class="mq-form-label" for="username">Email Address</label>
            <input type="email" id="username" name="username" class="mq-form-input" required placeholder="you@example.com">
        </div>
        <div class="mq-form-group">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                <label class="mq-form-label" for="password" style="margin-bottom: 0;">Password</label>
                <a href="/reset-password/" class="mq-forgot-link">Forgot password?</a>
            </div>
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
        
        <input type="hidden" name="action" value="mq_login">
        <input type="hidden" name="security" value="<?php echo wp_create_nonce('mq_auth_nonce'); ?>">
        <input type="hidden" name="redirect_to" id="redirect_to" value="">
        
        <button type="submit" class="mq-submit-btn" id="mq-login-btn">Sign In</button>
    </form>

    <div class="mq-auth-footer">
        Don't have an account? <a href="/sign-up">Sign up</a>
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

    const form = document.getElementById('mq-login-form');
    const alertBox = document.getElementById('mq-login-alert');
    const btn = document.getElementById('mq-login-btn');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset alert
        alertBox.className = 'mq-alert';
        alertBox.innerHTML = '';
        
        btn.classList.add('loading');
        btn.innerHTML = 'Signing in...';

        const formData = new FormData(form);

        fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            btn.classList.remove('loading');
            btn.innerHTML = 'Sign In';

            if (data.success) {
                if (data.data.tokenObject) {
                    localStorage.setItem('selfcareJWT', JSON.stringify(data.data.tokenObject));
                }
                alertBox.className = 'mq-alert success';
                alertBox.innerHTML = data.data.message;
                setTimeout(() => {
                    window.location.href = data.data.redirect;
                }, 1000);
            } else {
                alertBox.className = 'mq-alert error';
                alertBox.innerHTML = data.data.message;
            }
        })
        .catch(error => {
            btn.classList.remove('loading');
            btn.innerHTML = 'Sign In';
            alertBox.className = 'mq-alert error';
            alertBox.innerHTML = 'A network error occurred. Please try again.';
        });
    });
});
</script>