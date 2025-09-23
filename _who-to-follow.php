<div class="who-to-follow">
                <h2>Who to follow</h2>
                <div class="follow-suggestion">
                    <div class="profile-info">

                        <img src="https://avatar.iran.liara.run/public/94" alt="Profile Picture">
                        <div class="info-copy">

                            <p id="user_<?php _($user["user_first_name"] ?? ''); ?>" class="name"><?php _($user["user_first_name"] ?? 'Unknown'); ?></p>
                            <p class="handle">@<?php _($user["user_email"] ?? ''); ?></p>
                        </div>

                        <button class="follow-btn">Follow</button>
                    </div>