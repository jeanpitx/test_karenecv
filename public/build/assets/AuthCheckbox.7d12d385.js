import{p as a,v as l,o as s,c as d}from"./app.b6150d7e.js";import{_ as n}from"./_plugin-vue_export-helper.cdc0426e.js";const u={emits:["update:checked"],props:{checked:{type:[Array,Boolean],default:!1},value:{default:null}},computed:{proxyChecked:{get(){return this.checked},set(e){this.$emit("update:checked",e)}}}},p=["value"];function h(e,t,c,i,k,o){return a((s(),d("input",{type:"checkbox",value:c.value,"onUpdate:modelValue":t[0]||(t[0]=r=>o.proxyChecked=r),class:"form-checkbox border-0 rounded text-blueGray-700 ml-1 w-5 h-5 ease-linear transition-all duration-150"},null,8,p)),[[l,o.proxyChecked]])}const f=n(u,[["render",h]]);export{f as A};
