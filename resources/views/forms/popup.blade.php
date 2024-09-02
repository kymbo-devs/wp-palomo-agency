<x-html-forms :form="$form" class="newsletter-form form-{{ $form }}">
  <input
    class="newsletter-input"
    name="emailAddress"
    type="email"
    placeholder="Email Address"
    required
  >
  <input
    class="newsletter-submit !bg-primary-400"
    type="submit"
    value="Submit"
  />  
</x-html-forms>
