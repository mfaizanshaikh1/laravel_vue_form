<template>
  <div>
    <form class="form" @submit.prevent="submitForm">
      <div>
        <h2>Laravel Form Submission Using Vuejs</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" v-model="formData.name" required>
      </div>
      <div>
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile" v-model="formData.mobile" required>
      </div>
      <div>
        <label for="shop">Shop Name:</label>
        <input type="text" id="shop" v-model="formData.shop" required>
      </div>
      <div>
        <label for="cr">CR Number:</label>
        <input type="text" id="cr" v-model="formData.cr" required>
      </div>
      <div>
        <label for="vat">VAT Number:</label>
        <input type="text" id="vat" v-model="formData.vat" required>
      </div>
      <div>
        <button type="submit" class="submit">Submit</button>
      </div>
    </form>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      formData: {
        name: '',
        mobile: '',
        shop: '',
        cr: '',
        vat: '',
      },
    };
  },
  methods: {
    async submitForm() {
      // Frontend duplicate VAT number check logic goes here

      // Make an API request to Laravel backend
      try {
        const response = await axios.post('/api/submit-form', this.formData);
        if (response.data.success) {
          // Form submitted successfully, show a success message
          alert('Form submitted successfully');
        } else {
          // Handle error response
          alert('Form submission failed: ' + response.data.error);
        }
      } catch (error) {
        console.error('An error occurred:', error);
        alert('An error occurred while submitting the form.');
      }
    },
  },
};
</script>
