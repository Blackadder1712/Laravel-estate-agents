import {computed, isRef } from 'vue' //monthly import calculation


export const useMonthlyPayment = (total, interestRate, duration) => {
    const monthlyPayment = computed(() => {
        const principle = isRef(total) ? total.value : total //check if it is a reference or a calculation 
        const monthlyInterest = (isRef(interestRate) ? interestRate.value : interestRate) / 100 / 12 //12 months in a year 
        const numberOfPaymentMonths = (isRef(duration) ? duration.value : duration) * 12 // find out months 
      
        return principle * monthlyInterest * (Math.pow(1 + monthlyInterest, numberOfPaymentMonths))
         / (Math.pow(1 + monthlyInterest, numberOfPaymentMonths) - 1) //monthly payment
      })
    
    return { monthlyPayment }
}