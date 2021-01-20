<?php 
		//remember to increment db version when new social media are added.
	return array(
		0 => array(
            'id'      => 1,
            'class'      => 'twitter',
            'share'		=> 'https://twitter.com/share?url={url}&text={title}',
            'icon'		=> '<svg width="430.12px" height="430.12px" enable-background="new 0 0 430.117 430.117" version="1.1" viewBox="0 0 430.117 430.117" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m381.38 198.64c24.157-1.993 40.543-12.975 46.849-27.876-8.714 5.353-35.764 11.189-50.703 5.631-0.732-3.51-1.55-6.844-2.353-9.854-11.383-41.798-50.357-75.472-91.194-71.404 3.304-1.334 6.655-2.576 9.996-3.691 4.495-1.61 30.868-5.901 26.715-15.21-3.5-8.188-35.722 6.188-41.789 8.067 8.009-3.012 21.254-8.193 22.673-17.396-12.27 1.683-24.315 7.484-33.622 15.919 3.36-3.617 5.909-8.025 6.45-12.769-32.726 20.907-51.843 63.057-67.314 103.94-12.148-11.773-22.915-21.044-32.574-26.192-27.097-14.531-59.496-29.692-110.36-48.572-1.561 16.827 8.322 39.201 36.8 54.08-6.17-0.826-17.453 1.017-26.477 3.178 3.675 19.277 15.677 35.159 48.169 42.839-14.849 0.98-22.523 4.359-29.478 11.642 6.763 13.407 23.266 29.186 52.953 25.947-33.006 14.226-13.458 40.571 13.399 36.642-45.816 47.323-118.05 43.845-159.53 4.264 108.3 147.57 343.72 87.274 378.8-54.866 26.285 0.224 41.737-9.105 51.318-19.39-15.144 2.57-37.094-0.086-48.733-4.933z"/>
								</svg>',
            ),
		1 => array(
            'id'      => 2,
            'class'      => 'facebook',
            'share'		=> 'https://www.facebook.com/sharer.php?u={url}',
            'icon'		=>  '<svg width="430.11px" height="430.11px" enable-background="new 0 0 430.113 430.114" version="1.1" viewBox="0 0 430.113 430.114" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">  <path d="m158.08 83.3v59.218h-43.385v72.412h43.385v215.18h89.122v-215.18h59.805s5.601-34.721 8.316-72.685h-67.784s0-42.127 0-49.511c0-7.4 9.717-17.354 19.321-17.354h48.557v-75.385h-66.021c-93.519-5e-3 -91.316 72.479-91.316 83.299z"/></svg>',
            ),
		
		4 => array(
            'id'      => 5,
            'class'      => 'pinterest',
            'share'		=> 'https://pinterest.com/pin/create/bookmarklet/?media={img}&url={url}&is_video=false&description={title}',
            'icon'		=>  '<svg enable-background="new 0 0 310.05 310.05" version="1.1" viewBox="0 0 310.05 310.05" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m245.26 31.772c-21.342-20.488-50.877-31.772-83.164-31.772-49.32 0-79.654 20.217-96.416 37.176-20.658 20.9-32.504 48.651-32.504 76.139 0 34.513 14.436 61.003 38.611 70.858 1.623 0.665 3.256 1 4.857 1 5.1 0 9.141-3.337 10.541-8.69 0.816-3.071 2.707-10.647 3.529-13.936 1.76-6.495 0.338-9.619-3.5-14.142-6.992-8.273-10.248-18.056-10.248-30.788 0-37.818 28.16-78.011 80.352-78.011 41.412 0 67.137 23.537 67.137 61.425 0 23.909-5.15 46.051-14.504 62.35-6.5 11.325-17.93 24.825-35.477 24.825-7.588 0-14.404-3.117-18.705-8.551-4.063-5.137-5.402-11.773-3.768-18.689 1.846-7.814 4.363-15.965 6.799-23.845 4.443-14.392 8.643-27.985 8.643-38.83 0-18.55-11.404-31.014-28.375-31.014-21.568 0-38.465 21.906-38.465 49.871 0 13.715 3.645 23.973 5.295 27.912-2.717 11.512-18.865 79.953-21.928 92.859-1.771 7.534-12.44 67.039 5.219 71.784 19.841 5.331 37.576-52.623 39.381-59.172 1.463-5.326 6.582-25.465 9.719-37.845 9.578 9.226 25 15.463 40.006 15.463 28.289 0 53.73-12.73 71.637-35.843 17.367-22.418 26.932-53.664 26.932-87.978 0-26.826-11.52-53.272-31.604-72.556z"/>
								</svg>',
            ),
		5 => array(
            'id'      => 6,
            'class'      => 'linkedin',
            'share'		=> 'https://www.linkedin.com/shareArticle?url={url}&title={title}',
            'icon'		=>  '<svg width="430.12px" height="430.12px" enable-background="new 0 0 430.117 430.117" version="1.1" viewBox="0 0 430.117 430.117" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m430.12 261.54v159.02h-92.188v-148.37c0-37.271-13.334-62.707-46.703-62.707-25.473 0-40.632 17.142-47.301 33.724-2.432 5.928-3.058 14.179-3.058 22.477v154.87h-92.219s1.242-251.28 0-277.32h92.21v39.309c-0.187 0.294-0.43 0.611-0.606 0.896h0.606v-0.896c12.251-18.869 34.13-45.824 83.102-45.824 60.673-1e-3 106.16 39.636 106.16 124.82zm-377.93-251.98c-31.548 0-52.183 20.693-52.183 47.905 0 26.619 20.038 47.94 50.959 47.94h0.616c32.159 0 52.159-21.317 52.159-47.94-0.606-27.212-20-47.905-51.551-47.905zm-46.706 411h92.184v-277.32h-92.184v277.32z"/>
								</svg>',
            ),
		
		9 => array(
            'id'      => 10,
            'class'      => 'tumblr',
            'share'		=> 'https://www.tumblr.com/share/link?url={url}&name={title}&description={description}',
            'icon'		=>  '<svg width="430.12px" height="430.12px" enable-background="new 0 0 430.118 430.118" version="1.1" viewBox="0 0 430.118 430.118" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m252.8 351.54c-7.229-4.247-13.866-11.547-16.513-18.589-2.679-7.09-2.338-21.455-2.338-46.419v-110.29h100.3v-76.766h-100.3v-99.477h-61.713c-2.753 22.155-7.824 40.459-15.18 54.815-7.369 14.377-17.088 26.658-29.276 36.924-12.127 10.246-31.895 18.143-48.927 23.589v60.915h58.922v150.84c0 19.694 2.088 34.718 6.24 45.061 4.172 10.333 11.623 20.124 22.386 29.337 10.762 9.115 23.758 16.228 39.003 21.226 15.227 4.942 26.936 7.416 46.767 7.416 17.445 0 33.687-1.759 48.747-5.198 15.042-3.529 31.834-9.605 50.344-18.221v-67.859c-21.721 14.169-43.567 21.221-65.535 21.221-12.365 3e-3 -23.294-2.839-32.932-8.519z"/>
								</svg>',
            ),
		
		14 => array(
            'id'      => 15,
            'class'      => 'reddit',
            'share'		=> 'https://reddit.com/submit?url={url}&title={title}',
            'icon'		=>  '<svg width="430.12px" height="430.12px" enable-background="new 0 0 430.117 430.117" version="1.1" viewBox="0 0 430.117 430.117" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m307.52 231.06c1.11 2.838 1.614 5.769 1.614 8.681 0 5.862-2.025 11.556-5.423 16.204-3.36 4.593-8.121 8.158-13.722 9.727h0.01c-0.047 0.019-0.094 0.019-0.117 0.037-0.023 0-0.061 0.019-0.079 0.019-2.623 0.896-5.312 1.316-7.98 1.316-6.254 0-12.396-2.254-17.306-6.096-4.872-3.826-8.56-9.324-9.717-15.845h-0.01c0-0.019 0-0.042-9e-3 -0.069 0-0.019 0-0.038-0.019-0.065h0.019c-0.364-1.681-0.551-3.36-0.551-5.021 0-5.647 1.923-11.07 5.097-15.551 3.164-4.453 7.626-7.99 12.848-9.811 0.019 0 0.038-0.01 0.038-0.01 0.027 0 0.027-0.027 0.051-0.027 2.954-1.092 6.072-1.639 9.157-1.639 5.619 0 11.154 1.704 15.821 4.821 4.611 3.066 8.354 7.561 10.23 13.143 0.019 0.037 0.019 0.07 0.037 0.103 0 0.037 0.019 0.057 0.037 0.084h-0.026zm-17.194 69.287c-2.202-1.428-4.751-2.291-7.448-2.291-2.175 0-4.434 0.621-6.445 1.955-19.004 11.342-41.355 17.558-63.547 17.558-16.65 0-33.199-3.514-48.192-10.879l-0.077-0.037-0.075-0.028c-2.261-0.924-4.837-2.889-7.647-4.76-1.428-0.925-2.919-1.844-4.574-2.521-1.633-0.695-3.447-1.181-5.386-1.181-1.605 0-3.292 0.359-4.957 1.115-0.086 0.033-0.168 0.065-0.252 0.098h9e-3c-2.616 0.999-4.66 2.829-5.974 4.994-1.372 2.23-2.046 4.826-2.046 7.411 0 2.334 0.551 4.667 1.691 6.786 1.085 2.007 2.754 3.762 4.938 4.938 21.429 14.454 46.662 21.002 71.992 20.979 22.838 0 45.814-5.287 66.27-14.911l0.107-0.065 0.103-0.056c2.697-1.597 6.282-3.029 9.661-5.115 1.671-1.064 3.304-2.296 4.704-3.897 1.4-1.591 2.525-3.551 3.16-5.875v-0.01c0.266-1.026 0.392-2.025 0.392-3.024 0-1.899-0.467-3.701-1.241-5.32-1.134-2.438-2.991-4.435-5.166-5.864zm-150.45-34.76c0.037 0 0.086 0.014 0.128 0.037 2.735 0.999 5.554 1.493 8.345 1.493 6.963 0 13.73-2.852 18.853-7.5 5.115-4.662 8.618-11.257 8.618-18.775 0-0.196 0-0.392-9e-3 -0.625 0.019-0.336 0.028-0.705 0.028-1.083 0-7.458-3.456-14.08-8.522-18.762-5.085-4.686-11.836-7.551-18.825-7.551-1.867 0-3.769 0.219-5.628 0.653-0.028 0-0.049 9e-3 -0.077 9e-3h-0.028c-9.252 1.937-17.373 8.803-20.37 18.248v0.01c0 0.019-9e-3 0.037-9e-3 0.037-0.861 2.586-1.262 5.255-1.262 7.896 0 5.787 1.913 11.426 5.211 16.064 3.269 4.56 7.894 8.145 13.448 9.819 0.04 2e-3 0.059 0.012 0.099 0.03zm290.16-67.495v0.038c0.066 0.94 0.084 1.878 0.084 2.81 0 10.447-3.351 20.493-8.941 29.016-5.218 7.976-12.414 14.649-20.703 19.177 0.532 4.158 0.84 8.349 0.84 12.526-0.01 22.495-7.766 44.607-21.272 62.329v9e-3h-0.028c-24.969 33.216-63.313 52.804-102.03 62.684h-0.01l-0.027 0.023c-20.647 5.013-41.938 7.574-63.223 7.574-31.729 0-63.433-5.722-93.018-17.585l-9e-3 -0.028h-0.028c-30.672-12.643-59.897-32.739-77.819-62.184-9.642-15.71-14.935-34.141-14.935-52.659 0-4.19 0.283-8.387 0.843-12.536-8.072-4.545-15.063-10.99-20.255-18.687-5.542-8.266-9.056-17.95-9.5-28.187v-0.159c9e-3 -14.337 6.237-27.918 15.915-37.932 9.677-10.011 22.896-16.554 37.075-16.554h0.588c1.487-0.101 2.987-0.159 4.488-0.159 7.122 0 14.26 1.153 21.039 3.752l0.037 0.028 0.038 0.012c5.787 2.437 11.537 5.377 16.662 9.449 1.661-0.871 3.472-1.851 5.504-2.625 31.064-18.395 67.171-25.491 102.36-27.538 0.306-17.431 2.448-35.68 10.949-51.65 7.08-13.269 19.369-23.599 34-27.179l0.061-0.03 0.079-9e-3c5.573-1.078 11.192-1.575 16.774-1.575 14.869 0 29.561 3.521 43.31 9.017 6.086-9.185 14.776-16.354 24.97-20.375l0.098-0.056 0.098-0.037c5.983-1.864 12.303-2.954 18.646-2.954 6.692 0 13.437 1.223 19.756 4.046v-0.023c9e-3 0.023 0.019 0.023 0.019 0.023 0.047 0.016 0.084 0.044 0.116 0.044 9.059 3.489 16.727 9.937 22.164 17.95 5.442 8.048 8.644 17.688 8.644 27.599 0 1.827-0.103 3.657-0.317 5.489l-0.019 0.037c0 0.028 0 0.068-0.01 0.096-1.063 12.809-7.551 24.047-16.736 32.063-9.24 8.048-21.207 12.909-33.49 12.909-1.97 0-3.958-0.11-5.937-0.374-12.182-0.931-23.541-6.826-31.886-15.595-8.373-8.755-13.768-20.453-13.768-33.08 0-0.611 0.056-1.237 0.074-1.843-11.435-5.092-23.578-9.316-35.646-9.306-1.746 0-3.491 0.096-5.237 0.273h-0.019c-9.035 0.871-17.436 6.566-21.506 14.757v0.037c-6.179 12.034-7.411 26.101-7.598 40.064 34.639 2.259 69.483 10.571 100.04 28.138h0.047l0.438 0.259c0.579 0.343 1.652 0.931 2.623 1.449 2.101-1.704 4.322-3.456 6.856-4.966 9.264-6.17 20.241-9.238 31.223-9.238 4.872 0 9.749 0.621 14.481 1.834h0.019l0.196 0.058c0.07 0.01 0.121 0.033 0.178 0.033v9e-3c11.183 2.845 21.3 9.267 28.917 17.927 7.612 8.674 12.731 19.648 13.73 31.561v0.025h-0.012zm-102.03-113.36c0 0.469 0.01 0.95 0.057 1.44v0.084c0.224 6.018 3.065 11.619 7.383 15.756 4.34 4.14 10.1 6.702 15.942 6.725h0.159c0.42 0.033 0.85 0.033 1.26 0.033 5.899 9e-3 11.752-2.532 16.148-6.655 4.405-4.144 7.309-9.78 7.542-15.849l9e-3 -0.028v-0.037c0.038-0.464 0.057-0.903 0.057-1.377 0-6.247-2.922-12.202-7.496-16.612-4.555-4.406-10.688-7.136-16.735-7.12-1.951 0-3.884 0.266-5.778 0.854l-0.065 5e-3 -0.056 0.023c-4.984 1.295-9.656 4.368-13.012 8.449-3.371 4.062-5.415 9.084-5.415 14.309zm-255.69 92.845c-4.63-2.156-9.418-3.696-14.15-3.676-0.794 0-1.597 0.047-2.39 0.133h-0.11l-0.11 0.014c-6.795 0.187-13.653 3.15-18.801 7.899-5.152 4.732-8.559 11.122-8.821 18.167v0.065l-0.012 0.058c-0.046 0.57-0.065 1.137-0.065 1.683 0 4.345 1.333 8.545 3.593 12.368 1.673 2.847 3.867 5.441 6.348 7.701 7.941-17.388 20.348-32.145 34.518-44.412zm301.75 85.057c0-15.5-5.592-31.069-14.646-43.604-18.053-25.119-46.055-41.502-75.187-50.636l-0.205-0.072c-5.592-1.715-11.238-3.234-16.933-4.534-17.025-3.876-34.48-5.806-51.917-5.806-23.414 0-46.827 3.465-69.245 10.379-29.125 9.243-57.221 25.51-75.233 50.71v0.019c-9.129 12.587-14.475 28.208-14.475 43.763 0 5.727 0.716 11.453 2.23 17.025l0.019 0.01c3.278 12.508 9.689 23.671 17.989 33.393 8.295 9.745 18.472 18.058 29.176 24.839 2.371 1.47 4.751 2.87 7.187 4.237 31.094 17.356 66.898 24.964 102.44 24.964 6.012 0 12.06-0.214 18.033-0.644 35.797-2.959 71.742-13.525 100.8-35.115l0.01-0.023c9.25-6.837 17.818-15.112 24.595-24.525 6.805-9.418 11.789-19.947 14.002-31.382v-0.033l9e-3 -0.01c0.907-4.27 1.346-8.605 1.346-12.955zm28.254-61.685c-9e-3 -3.762-0.868-7.507-2.753-11l-0.047-0.044-0.019-0.056c-2.521-5.19-6.479-9.11-11.248-11.782-4.77-2.69-10.352-4.056-15.952-4.056-5.063 0-10.1 1.132-14.57 3.379 14.216 12.344 26.687 27.179 34.746 44.636 2.595-2.259 4.808-5.018 6.464-8.084 2.157-4.023 3.379-8.538 3.379-12.993z"/>
								</svg>',
            ),
      
         17 => array(
            'id'      => 18,
            'class'      => 'email',
            'share'     => 'mailto:?subject={title}&body={url}',
            'icon'		=>  '<svg enable-background="new 0 0 483.3 483.3" version="1.1" viewBox="0 0 483.3 483.3" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
									<path d="m424.3 57.75h-365.2c-32.6 0-59.1 26.5-59.1 59.1v249.6c0 32.6 26.5 59.1 59.1 59.1h365.1c32.6 0 59.1-26.5 59.1-59.1v-249.5c0.1-32.6-26.4-59.2-59-59.2zm32.1 308.7c0 17.7-14.4 32.1-32.1 32.1h-365.2c-17.7 0-32.1-14.4-32.1-32.1v-249.5c0-17.7 14.4-32.1 32.1-32.1h365.1c17.7 0 32.1 14.4 32.1 32.1v249.5h0.1z"/>
									<path d="m304.8 238.55l118.2-106c5.5-5 6-13.5 1-19.1-5-5.5-13.5-6-19.1-1l-163 146.3-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3-0.7-0.7-1.4-1.3-2.2-1.9l-129.4-115.8c-5.6-5-14.1-4.5-19.1 1.1s-4.5 14.1 1.1 19.1l119.6 106.9-119.1 111.5c-5.4 5.1-5.7 13.6-0.6 19.1 2.7 2.8 6.3 4.3 9.9 4.3 3.3 0 6.6-1.2 9.2-3.6l120.9-113.1 32.8 29.3c2.6 2.3 5.8 3.4 9 3.4s6.5-1.2 9-3.5l33.7-30.2 120.2 114.2c2.6 2.5 6 3.7 9.3 3.7 3.6 0 7.1-1.4 9.8-4.2 5.1-5.4 4.9-14-0.5-19.1l-118.7-112.7z"/>
								</svg>',
            ),


	);

?>