 @props(['name', 'label', 'placeholder', 'id'])
 <div>
     <label for="{{ $id }}" class="block mb-2 text-sm font-medium ">{{ $label }}<span
             class="text-red-500">*</span></label>
     <div class="relative">
         <input type="password" name="{{ $name }}" id="{{ $id }}"
             class=" border-border border-0 border-b-2  focus:border-primary outline-none transition-colors duration-200  text-sm rounded-lg block w-full p-2.5  placeholder-text-muted"
             placeholder="{{ $placeholder }}" required>

         <button id="togglePassword" type="button" onclick="togglePasswordType('{{ $id }}', this)"
             class="absolute right-2 top-1/2 -translate-y-1/2 text-gray-500 cursor-pointer">
             <i class="ri-eye-fill"></i>
         </button>
     </div>
 </div>

 <script>
     const togglePasswordType = (id, button) => {
         const passwordInput = document.getElementById(id).getAttribute('type') === 'password' ? 'text' : 'password';
         document.getElementById(id).setAttribute('type', passwordInput);
         button.innerHTML = passwordInput === 'password' ? '<i class="ri-eye-fill"></i>' :
             '<i class="ri-eye-off-fill"></i>';
     }
 </script>
