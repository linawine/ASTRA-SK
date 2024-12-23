document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("#burger").addEventListener("click", function () {
      let header = document.querySelector("#header");
      if (header.classList.contains('open')) {
        header.classList.remove('open');
      } else {
        header.classList.add('open');
      };
    });
  });

  class FormsValidation {
    selectors = {
      form: '[data-js-form]',
      fieldErrors: '[data-js-form-field-errors]'
    }
    errorMessages = {
      valueMissing: ({ title }) => title || "Пожалуйста заполните это поле",
      patternMismatch: ({ title }) => title || "Пожалуйста заполните это поле",
      tooShort: ({ title }) => title,
      tooLong: ({ title }) => title,
    }
    constructor() {
      this.bindEvents()
    }
    manageErrors(fieldControlElement, errorMessages) {
      const fieldErrorsElement = fieldControlElement.parentElement.querySelector(this.selectors.fieldErrors)
      fieldErrorsElement.innerHTML = errorMessages
        .map((message) => `<span class="field__error">${message}</span>`)
        .join('')
  
      if (errorMessages.length > 0) {
        fieldControlElement.classList.add('error');
      } else {
        fieldControlElement.classList.remove('error');
      }
    }
    validateField(fieldControlElement) {
      const errors = fieldControlElement.validity
      const errorMessages = []
      Object.entries(this.errorMessages).forEach(([errorType, getErrorMessage]) => {
        if (errors[errorType]) {
          errorMessages.push(getErrorMessage(fieldControlElement))
        }
      })
      this.manageErrors(fieldControlElement, errorMessages)
      const isValid = errorMessages.length === 0
      fieldControlElement.ariaInvalid = !isValid
      return isValid
    }
    onBlur(event) {
      const { target } = event
      const isFormField = target.closest(this.selectors.form)
      const isRequired = target.required
      if (isFormField && isRequired) {
        this.validateField(target)
      }
    }
    onChange(event) {
      const { target } = event
      const isRequired = target.required
      const isToggleType = ['checkbox'].includes(target.type)
      if (isToggleType && isRequired) {
        this.validateField(target)
      }
    }
    onSubmit(event) {
      const isFormElement = event.target.matches(this.selectors.form)
      if (!isFormElement) {
        return
      }
      const requiredControlElements = [...event.target.elements].filter(({ required }) => required)
      let isFormValid = true
      let firstInvalidFieldControl = null
      requiredControlElements.forEach((element) => {
        const isFieldValid = this.validateField(element)
        if (!isFieldValid) {
          isFormValid = false
          if (!firstInvalidFieldControl) {
            firstInvalidFieldControl = element
          }
        }
      })
      if (!isFormValid) {
        event.preventDefault()
        firstInvalidFieldControl.focus()
        event.target.reset(); 
      } else {
        event.target.reset(); 
      }
    }
    bindEvents() {
      document.addEventListener('blur', (event) => {
        this.onBlur(event)
      }, { capture: true })
      document.addEventListener('change', (event) => this.onChange(event))
      document.addEventListener('submit', (event) => this.onSubmit(event))
    }
  }
  new FormsValidation()
  
  const modalController = ({ modal, btnOpen, btnClose, time = 300 }) => {
    const buttonElems = document.querySelectorAll(btnOpen);
    const modalElem = document.querySelector(modal);
  
    if (!modalElem) {
      console.error(`Ошибка: Не удалось найти модальное окно с селектором: ${modal}`);
      return;
    }
  
    modalElem.style.cssText = `
      display: flex;
      visibility: hidden;
      opacity: 0;
      transition: opacity ${time}ms ease-in-out;
    `;
    const closeModal = event => {
      const target = event.target;
      if (
        target === modalElem ||
        (btnClose && target.closest(btnClose)) ||
        event.code === 'Escape'
      ) {
        modalElem.style.opacity = 0;
        setTimeout(() => {
          modalElem.style.visibility = 'hidden';
        }, time);
        window.removeEventListener('keydown', closeModal);
      }
    };
    const openModal = () => {
      modalElem.style.visibility = 'visible';
      modalElem.style.opacity = 1;
      window.addEventListener('keydown', closeModal);
    };
    buttonElems.forEach(btn => {
      btn.addEventListener('click', openModal);
    });
    modalElem.addEventListener('click', closeModal);
  };
  
  modalController({
    modal: '.modal1',
    btnOpen: '.section__button1',
    btnClose: '.modal-close',
  });
  modalController({
    modal: '.modal2',
    btnOpen: '.section__button2',
    btnClose: '.modal-close'
  });
  
  modalController({
    modal: '.modal-success-1',
    btnOpen: null,
    btnClose: '.сlose-modal'
  });
  modalController({
    modal: '.modal-success-2',
    btnOpen: null,
    btnClose: '.сlose-modal'
  });
  
  const forms = document.querySelectorAll('[data-js-form]');
  forms.forEach(form => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();
  
      const modalRegistrations = document.querySelectorAll('.modal-registration');
      modalRegistrations.forEach(modal => {
        modal.style.opacity = 0;
        setTimeout(() => {
          modal.style.visibility = 'hidden';
        }, 300);
      });
  
      if (form.id === 'registration-form-1') {
        const successModal = document.querySelector('.modal-success-1');
        successModal.style.visibility = 'visible';
        successModal.style.opacity = 1;
      } else if (form.id === 'registration-form-2') {
        const successModal = document.querySelector('.modal-success-2');
        successModal.style.visibility = 'visible';
        successModal.style.opacity = 1;
      }
    });
  });