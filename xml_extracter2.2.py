from xml.etree import ElementTree as ET
from mysql.connector import connect
from mysql.connector.errors import IntegrityError
import re
import time
import sys
import os

dir = '/home/andre/Desktop/Sistema/NFe'  # Diretório para testes

pretag = '{http://www.portalfiscal.inf.br/nfe}'

mydb = connect(host='localhost',
               user='root',
               passwd='',
               database='rodabras')


def ext_emitente(arq):
    dict = {}
    emit = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'emit')
    ender_emit = emit.find(pretag + 'enderEmit')
    cnpj_cpf = emit.find(pretag + 'CNPJ')
    if cnpj_cpf is not None:
        dict['cnpj_cpf'] = cnpj_cpf
    else:
        dict['cnpj_cpf'] = emit.find(pretag + 'CPF')
    dict['nome'] = emit.find(pretag + 'xNome')
    dict['fantasia'] = emit.find(pretag + 'xFant')
    dict['logradouro'] = ender_emit.find(pretag + 'xLgr')
    dict['numero'] = ender_emit.find(pretag + 'nro')
    dict['complemento'] = ender_emit.find(pretag + 'xCpl')
    dict['bairro'] = ender_emit.find(pretag + 'xBairro')
    dict['cod_mun'] = ender_emit.find(pretag + 'cMun')
    dict['municipio'] = ender_emit.find(pretag + 'xMun')
    dict['uf'] = ender_emit.find(pretag + 'UF')
    dict['cep'] = ender_emit.find(pretag + 'CEP')
    dict['cod_pais'] = ender_emit.find(pretag + 'cPais')
    dict['pais'] = ender_emit.find(pretag + 'xPais')
    dict['telefone'] = ender_emit.find(pretag + 'fone')
    dict['insc_estadual'] = emit.find(pretag + 'IE')
    dict['insc_municipal'] = emit.find(pretag + 'IM')
    dict['cnae'] = emit.find(pretag + 'CNAE')
    dict['crt'] = emit.find(pretag + 'CRT')
    dict['email'] = emit.find(pretag + 'email')
    for k, v in dict.items():
        try:
            dict[k] = v.text
        except AttributeError:
            pass
    return dict


def ext_destinatario(arq):
    dict = {}
    dest = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'dest')
    ender_dest = dest.find(pretag + 'enderDest')
    cnpj_cpf = dest.find(pretag + 'CNPJ')
    if cnpj_cpf is not None:
        dict['cnpj_cpf'] = cnpj_cpf
    else:
        dict['cnpj_cpf'] = dest.find(pretag + 'CPF')
    dict['nome'] = dest.find(pretag + 'xNome')
    dict['fantasia'] = dest.find(pretag + 'xFant')
    dict['logradouro'] = ender_dest.find(pretag + 'xLgr')
    dict['numero'] = ender_dest.find(pretag + 'nro')
    dict['complemento'] = ender_dest.find(pretag + 'xCpl')
    dict['bairro'] = ender_dest.find(pretag + 'xBairro')
    dict['cod_mun'] = ender_dest.find(pretag + 'cMun')
    dict['municipio'] = ender_dest.find(pretag + 'xMun')
    dict['uf'] = ender_dest.find(pretag + 'UF')
    dict['cep'] = ender_dest.find(pretag + 'CEP')
    dict['cod_pais'] = ender_dest.find(pretag + 'cPais')
    dict['pais'] = ender_dest.find(pretag + 'xPais')
    dict['telefone'] = ender_dest.find(pretag + 'fone')
    dict['insc_estadual'] = dest.find(pretag + 'IE')
    dict['ind_ie_dest'] = dest.find(pretag + 'indIEDest')
    dict['insc_municipal'] = dest.find(pretag + 'IM')
    dict['cnae'] = dest.find(pretag + 'CNAE')
    dict['email'] = dest.find(pretag + 'email')
    for k, v in dict.items():
        try:
            dict[k] = v.text
        except AttributeError:
            pass
    return dict


def ext_nfe(arq):
    dict = {}
    ide = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'ide')
    total = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'total')
    emit = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'emit')
    dest = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'dest')
    chave = arq.find(pretag + 'NFe').find(pretag + 'infNFe').get('Id')[3:]
    dict['chave'] = chave
    dict['tipo'] = ide.find(pretag + 'tpNF')
    dict['numero'] = ide.find(pretag + 'nNF')
    dict['natureza'] = ide.find(pretag + 'natOp')
    dict['indPag'] = ide.find(pretag + 'indPag')
    dict['modelo'] = ide.find(pretag + 'mod')
    dict['serie'] = ide.find(pretag + 'serie')
    dict['idDest'] = ide.find(pretag + 'idDest')
    dict['cMunFG'] = ide.find(pretag + 'cMunFG')
    dict['tpImp'] = ide.find(pretag + 'tpImp')
    dict['tpEmis'] = ide.find(pretag + 'tpEmis')
    dict['cDV'] = ide.find(pretag + 'cDV')
    dict['tpAmb'] = ide.find(pretag + 'tpAmb')
    dict['finNFe'] = ide.find(pretag + 'finNFe')
    dict['indFinal'] = ide.find(pretag + 'indFinal')
    dict['indPres'] = ide.find(pretag + 'indPres')
    dict['procEmi'] = ide.find(pretag + 'procEmi')
    dict['emissao'] = ide.find(pretag + 'dhEmi')
    dict['bc_icms'] = total.find(pretag + 'ICMSTot').find(pretag + 'vBC')
    dict['vlr_icms'] = total.find(pretag + 'ICMSTot').find(pretag + 'vICMS')
    dict['bc_icms_st'] = total.find(pretag + 'ICMSTot').find(pretag + 'vBCST')
    dict['vlr_icms_st'] = total.find(pretag + 'ICMSTot').find(pretag + 'vST')
    dict['vlr_ipi'] = total.find(pretag + 'ICMSTot').find(pretag + 'vIPI')
    dict['vlr_pis'] = total.find(pretag + 'ICMSTot').find(pretag + 'vPIS')
    dict['vlr_cofins'] = total.find(pretag + 'ICMSTot').find(pretag + 'vCOFINS')
    dict['vlr_total'] = total.find(pretag + 'ICMSTot').find(pretag + 'vNF')
    dict['frete'] = arq.find(pretag + 'NFe').find(pretag + 'infNFe').find(pretag + 'transp').find(pretag + 'modFrete')
    cnpj_cpf_emit = emit.find(pretag + 'CNPJ')
    if cnpj_cpf_emit is not None:
        dict['id_emitente'] = cnpj_cpf_emit
    else:
        dict['id_emitente'] = emit.find(pretag + 'CPF')
    cnpj_cpf_dest = dest.find(pretag + 'CNPJ')
    if cnpj_cpf_dest is not None:
        dict['id_destinatario'] = cnpj_cpf_dest
    else:
        dict['id_destinatario'] = dest.find(pretag + 'CPF')
    for k, v in dict.items():
        if k == 'chave':
            continue
        try:
            dict[k] = v.text
        except AttributeError:
            pass
    return dict


def ext_produto(arq):
    return_prods = []
    tab_prods = arq.find(pretag + 'NFe').find(pretag + 'infNFe').findall(pretag + 'det')
    chave = arq.find(pretag + 'NFe').find(pretag + 'infNFe').get('Id')[3:]
    for det in tab_prods:
        dict = {}
        prod = det.find(pretag + 'prod')
        imposto = det.find(pretag + 'imposto')
        icms = imposto.find(pretag + 'ICMS')
        ipi = imposto.find(pretag + 'IPI')
        pis = imposto.find(pretag + 'PIS')
        cofins = imposto.find(pretag + 'COFINS')
        dict['nItem'] = det.get('nItem')
        dict['nfe_chave'] = chave
        dict['codigo'] = prod.find(pretag + 'cProd')
        dict['descricao'] = prod.find(pretag + 'xProd')
        dict['ncm'] = prod.find(pretag + 'NCM')
        if icms is None:
            dict['cst'] = None
        else:
            try:
                dict['cst'] = icms.find(list(icms.iter())[1].tag).find(pretag + 'CST')
            except AttributeError:
                dict['cst'] = icms.find(list(icms.iter())[1].tag).find(pretag + 'CSOSN')
        dict['cfop'] = prod.find(pretag + 'CFOP')
        dict['un'] = prod.find(pretag + 'uCom')
        dict['quantidade'] = prod.find(pretag + 'qCom')
        dict['vlr_unit'] = prod.find(pretag + 'vUnCom')
        dict['vlr_total'] = prod.find(pretag + 'vProd')
        if icms is None:
            dict['bc_icms'] = None
            dict['aliq_icms'] = None
            dict['vlr_icms'] = None
        else:
            dict['bc_icms'] = icms.find(list(icms.iter())[1].tag).find(pretag + 'vBC')
            dict['aliq_icms'] = icms.find(list(icms.iter())[1].tag).find(pretag + 'pICMS')
            dict['vlr_icms'] = icms.find(list(icms.iter())[1].tag).find(pretag + 'vICMS')
        if ipi is None:
            dict['bc_ipi'] = None
            dict['aliq_ipi'] = None
            dict['vlr_ipi'] = None
        else:
            dict['bc_ipi'] = ipi.find(list(ipi.iter())[1].tag).find(pretag + 'vBC')
            dict['aliq_ipi'] = ipi.find(list(ipi.iter())[1].tag).find(pretag + 'pIPI')
            dict['vlr_ipi'] = ipi.find(list(ipi.iter())[1].tag).find(pretag + 'vIPI')
        if pis is None:
            dict['bc_pis'] = None
            dict['aliq_pis'] = None
            dict['vlr_pis'] = None
        else:
            dict['bc_pis'] = pis.find(list(pis.iter())[1].tag).find(pretag + 'vBC')
            dict['aliq_pis'] = pis.find(list(pis.iter())[1].tag).find(pretag + 'pPIS')
            dict['vlr_pis'] = pis.find(list(pis.iter())[1].tag).find(pretag + 'vPIS')
        if cofins is None:
            dict['bc_cofins'] = None
            dict['aliq_cofins'] = None
            dict['vlr_cofins'] = None
        else:
            dict['bc_cofins'] = cofins.find(list(cofins.iter())[1].tag).find(pretag + 'vBC')
            dict['aliq_cofins'] = cofins.find(list(cofins.iter())[1].tag).find(pretag + 'pCOFINS')
            dict['vlr_cofins'] = cofins.find(list(cofins.iter())[1].tag).find(pretag + 'vCOFINS')
        for k, v in dict.items():
            try:
                dict[k] = v.text
            except AttributeError:
                pass
        return_prods.append(dict)
    return return_prods


def insert_emitente(dict, database):
    mycursor = database.cursor()
    columns = ''
    values = ''
    for k, v in dict.items():
        if v is None:
            continue
        columns = columns + k + ','
        values = values + '"' + v + '"' + ','
    try:
        mycursor.execute('insert into emitente({}) values({})'.format(columns[:-1], values[:-1]))
        database.commit()
    except IntegrityError:
        pass


def insert_destinatario(dict, database):
    mycursor = database.cursor()
    columns = ''
    values = ''
    for k, v in dict.items():
        if v is None:
            continue
        columns = columns + k + ','
        values = values + '"' + v + '"' + ','
    try:
        mycursor.execute('insert into destinatario({}) values({})'.format(columns[:-1], values[:-1]))
        database.commit()
    except IntegrityError:
        pass


def insert_nfe(dict, database):
    mycursor = database.cursor()
    columns = ''
    values = ''
    for k, v in dict.items():
        if v is None:
            continue
        if k == 'emissao':
            v = re.search(r'(.*)T', v).group(1)
        columns = columns + k + ','
        values = values + '"' + v + '"' + ','
    mycursor.execute('insert into nfe({}) values({})'.format(columns[:-1], values[:-1]))
    database.commit()


def insert_produto(list_dicts, database):
    mycursor = database.cursor()
    for dict in list_dicts:
        columns = ''
        values = ''
        for k, v in dict.items():
            if v is None:
                continue
            columns = columns + k + ','
            values = values + '"' + v + '"' + ','
        mycursor.execute('insert into produto({}) values({})'.format(columns[:-1], values[:-1]))
    database.commit()


def init(list_arquives):
    # inicio = time.time()
    for arquive in list_arquives:
        if os.path.isdir(arquive):
            for arq_xml in os.listdir(arquive):
                if arq_xml.endswith('.xml'):
                    arq = ET.parse(os.path.join(arquive, arq_xml))
                    insert_emitente(ext_emitente(arq), mydb)
                    insert_destinatario(ext_destinatario(arq), mydb)
                    try:
                        insert_nfe(ext_nfe(arq), mydb)
                        insert_produto(ext_produto(arq), mydb)
                    except IntegrityError:
                        # print('Nota repetida!')
                        pass
        if arquive.endswith('.xml'):
            arq = ET.parse(os.path.join(dir, arquive))
            insert_emitente(ext_emitente(arq), mydb)
            insert_destinatario(ext_destinatario(arq), mydb)
            try:
                insert_nfe(ext_nfe(arq), mydb)
                insert_produto(ext_produto(arq), mydb)
            except IntegrityError:
                # print('Nota repetida!')
                pass
    # fim = time.time()
    # total = fim - inicio
    # print('Tempo gasto: {}'.format(total))


init(sys.argv[1:])
# init(os.listdir(dir))  # init para testes